<?php

use Illuminate\Database\Migrations\Migration;

class CourseInitialDataImport extends Migration
{
    public function up()
    {
        /**
         * We don't need to create anything specific here because eduka
         * already has the migration logic to migrate this course. The next
         * courses they will need to have their own migration logic.
         *
         * The only thing that lives here he any specific computation related
         * to the course configuration as per the eduka context.
         *
         * Please check the eduka-migrations migration files.
         */
    }

    public function down()
    {
        //
    }
}
