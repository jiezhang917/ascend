const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['BasisGrotesquePro', ...defaultTheme.fontFamily.sans],
                bold: ['BasisGrotesquePro-Bold', ...defaultTheme.fontFamily.sans],
                light: ['BasisGrotesquePro-Light', ...defaultTheme.fontFamily.sans],
            },
            backgroundColor: theme => ({
                'primary': '#fef6e4',
                'orange': '#ff6363',
                'green': '#65a875',
                'dark-blue': '#172c66',
                'light-green': '#a8c2ae',
            }),
            textColor: {
                'dark-slate-blue': '#172c66',
                'dark': '#3a2006',
                'modal': '#172c66'
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
