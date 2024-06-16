import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
                dmSans: ['DM Sans', 'sans-serif']
            },
            colors: {
                'blueDark': '#252B42',
                'grayDark': '#737373',
                'blueLight': '#23A6F0',
                'blueExtraLight': '#9BEAF2',
                'purpleDark': '#2A7CC7',
            }
        },
    },

    plugins: [
        require('daisyui'),    
        forms
    ],
};
