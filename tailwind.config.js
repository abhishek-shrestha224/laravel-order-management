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
        },
    },
    plugins: [],
};
