import {defineConfig} from 'vite';
import {fileURLToPath} from 'node:url'
import {dirname, resolve} from 'node:path'
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import tailwindcss from 'tailwindcss';
import VueI18nPlugin from '@intlify/unplugin-vue-i18n/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue(),
        VueI18nPlugin({
            runtimeOnly: false,
            include: resolve(dirname(fileURLToPath(import.meta.url)), '/resources/js/includes/**'),
        })
    ],
    css: {
        postcss: {
            plugins: [
                tailwindcss('./tailwind.config.js'),
            ],
        },
    },
    build: {
        rollupOptions: {
            external: [/^\/?storage\/.*\.(png|jpe?g|gif|webp)$/i],
        },
    },
});
