const colors = require('tailwindcss/colors');

module.exports = {
    mode: "jit",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                brand: colors.indigo,
            },
        },
    },
    plugins: [],
}
