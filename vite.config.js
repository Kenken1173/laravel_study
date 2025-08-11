import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// https://tailwindcss.com/docs/installation/using-vite 参照
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
