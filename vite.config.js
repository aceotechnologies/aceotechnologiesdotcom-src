import { dirname, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';
import { defineConfig } from 'vite';
import { globSync } from 'glob';
import tailwindcss from '@tailwindcss/vite';

const __dirname = dirname(fileURLToPath(import.meta.url));

const pages = {
    main: resolve(__dirname, 'index.html'),
    about: resolve(__dirname, 'about/index.html'),
    services: resolve(__dirname, 'services/index.html'),
    contact: resolve(__dirname, 'contact/index.html'),

    wmchub_lp_fb_main: resolve(__dirname, 'wmc-hub/landing-pages/fb-main.html'),
    wmchub_lp_resolve: resolve(__dirname, 'wmc-hub/landing-pages/index.html'),
    wmchub_terms: resolve(__dirname, 'wmc-hub/legal/terms/index.html'),
    wmchub_legal_resolve: resolve(__dirname, 'wmc-hub/legal/index.html'),
};
const blog = {...globSync('blog/*.html')};

export default defineConfig ({
    build: {
        rollupOptions: {
            input: {...pages, ...blog },
        },
    },
    plugins: [
        tailwindcss(),
    ],
})
