import { dirname, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

const __dirname = dirname(fileURLToPath(import.meta.url))

export default defineConfig ({
    build: {
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'index.html'),
                about: resolve(__dirname, 'about/index.html'),
                // what_we_do: resolve(__dirname, 'what-we-do/index.html'),
                // why_beitor: resolve(__dirname, 'why-beitor/index.html'),
                // contact_us: resolve(__dirname, 'contact-us/index.html'),
            },
        },
    },
    plugins: [
        tailwindcss(),
    ],
})
