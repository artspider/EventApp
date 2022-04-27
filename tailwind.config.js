const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./src/**/*.{html,js}",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
                raleway: ["Raleway"],
                sans: ["Source Sans Pro"],
            },
            colors: {
                "main-color": "#f3f8fb",
                "secondary-color": "#262626",
                "neutral-color": "#fff",
                "accent-color": "#1f3d6d",
                "box1-color": "#95cfd5",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("tailwind-scrollbar"),
        require("tw-elements/dist/plugin"),
    ],
};
