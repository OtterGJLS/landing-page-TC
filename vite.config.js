import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/client/pages/home/styles.css',
                'resources/css/client/pages/klien/styles.css',
                'resources/css/client/pages/pelatihan/styles.css',
                'resources/css/client/pages/sertifikat/styles.css',
                'resources/css/client/pages/layanan/styles.css',
                'resources/css/client/pages/tentang-kami/styles.css',
                'resources/css/client/pages/kontak/styles.css',
            ],
            refresh: true,
        }),
    ],
});
