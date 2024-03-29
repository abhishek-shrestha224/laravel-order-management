/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                heading: "Catamaran",
                accent: "Old Standard TT",
                body: "Inter",
            },
            colors: {
                dark: "#1A2238",
                light: "#fff",
                accent: "#FF6A3D",
            },
        },
    },
    plugins: [],
};
