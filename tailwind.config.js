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
            typography: {
                DEFAULT: {
                    css: {
                        a: {
                            color: '#6366f1',
                            '&:hover': {
                                color: '#4338ca',
                            },
                        },
                        h2: {
                            color: "#1f2937",
                        },
                        blockquote: {
                            borderLeftColor: '#6366f1',
                            backgroundColor: '#f8fafc',
                            borderRadius: '5px',
                            'p': {
                                paddingTop: '0.55em',
                                paddingBottom: '0.55em',
                            },
                        },
                    },
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/line-clamp'),
    ],
}
