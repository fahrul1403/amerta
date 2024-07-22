/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                // 'primary': '#1c2434',
                primary: "#624efe",
                // 'secondary': '#624efe',
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
