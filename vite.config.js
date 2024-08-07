// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input: [
//                     'resources/**/*.blade.php',
//                     'resources/**/*.js',
//                     'resources/css/app.css',
//                     'resources/js/app.js',
//                     'resources/css/filament/admin/theme.css'
//             ],
//             refresh: true,
//         }),
//     ],
// });

// import { defineConfig } from 'vite';
// import laravel from 'laravel-vite-plugin';

// export default defineConfig({
//     plugins: [
//         laravel({
//             input:['resources/css/app.css', 'resources/js/app.js',   
//  'resources/**/*.blade.php'], // Pastikan ini ada
//             refresh: true,
//         }),
//     ],
// });

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/filament/admin/theme.css'
            ],
            refresh: true,
        }),
    ],
});