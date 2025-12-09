// wisetech/tailwind.config.js

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php", // <--- Pastikan ini ada
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'wti-orange': '#ff6600', // Tambahkan warna custom Anda
            },
        },
    },
    plugins: [],
}