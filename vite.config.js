import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
// import path from "path";

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
<<<<<<< HEAD
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
    // build: {
        // lib: {
            // entry: path.resolve(__dirname, "resources/js/app.js"),
            // entry: path.resolve(__dirname, "resources/css/app.css"),
            // name: "TemplateStyle",
        // },
    // },
=======
>>>>>>> e9542bc47b90eed1cb8f65be17c0db1cc6f69b8b
});
