import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue', // Se você estiver usando Vue
    ],

    theme: {
        extend: {},
    },

    plugins: [],
};
