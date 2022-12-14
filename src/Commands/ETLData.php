<?php

namespace MasteringNova\Commands;

use Eduka\Abstracts\Classes\EdukaCommand;
use Eduka\Cube\Models\Chapter;
use Eduka\Cube\Models\Invoice;
use Eduka\Cube\Models\User;
use Eduka\Cube\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ETLData extends EdukaCommand
{
    protected $signature = 'mastering-nova:etl';

    protected $description = 'Imports production data from the old mastering nova database (connection:mastering-nova-production)';

    protected $sourceDb;

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        if (! array_key_exists('mastering-nova-production', config('database.connections'))) {
            $this->error('Database connection "mastering-nova-production" is missing on the database.php configuration');
        }

        $this->info('Exporting data to CSV files...');

        $this->sourceDb = DB::connection('mastering-nova-production');

        /**
         * Super important the order that you fill this array, since you
         * might want to import specific data BEFORE you import other type
         * of data that will depend on the previous one.
         */
        $tables = [
            'users',
            'chapters',
            'videos',
        ];

        foreach ($tables as $table) {
            $function = (string) Str::of($table)->camel().'ETL';

            $this->info('Processing table '.$table.' using method '.$function.'()...');

            if (method_exists($this, $function)) {
                $this->$function($table);

                $this->info('ETL complete');
            } else {
                $this->alert('Method '.$function.'() not found!');
            }
        }

        return 0;
    }

    protected function usersETL(string $table)
    {
        User::truncate();

        $this->sourceDb->table('users')->chunkById(100, function ($users) {
            foreach ($users as $user) {
                User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => $user->password,
                    'can_receive_notifications' => $user->allows_emails
                ]);
            }
        });
    }

    protected function chaptersETL(string $table)
    {
        Chapter::truncate();

        $this->sourceDb->table('chapters')->chunkById(100, function ($chapters) {
            foreach ($chapters as $chapter) {
                // title, index
                Group::create([
                    'name' => $chapter->title,
                    'course_id' => 1 // Always the same.
                ]);
            }
        });
    }

    protected function videosETL(string $table)
    {
        Video::truncate();

        $this->sourceDb->table('videos')->chunkById(100, function ($videos) {
            foreach ($videos as $video) {
                Video::create([
                    'name' => $video->title,
                    'details' => $video->details,
                    'index_chapter' => $video->index,
                    'is_free' => $video->is_free,
                    'chapter_id' => $video->chapter_id
                ]);
            }
        });
    }
}
