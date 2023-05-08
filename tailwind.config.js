const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.jsx",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#810CA8",
                terang: "#E5B8F4",
                semi: "#C147E9",
                gelap: "#2D033B",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
