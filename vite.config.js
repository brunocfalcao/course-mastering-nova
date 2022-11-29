import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/vendor/mastering-nova/css/app.css',
                'resources/vendor/mastering-nova/js/app.js'],
            refresh: true,
        }),
    ],
});
