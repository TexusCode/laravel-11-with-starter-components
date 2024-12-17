import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './node_modules/flowbite/**/*.js',
        'node_modules/preline/dist/*.js',

    ],
    theme: {
        extend: {
            colors: {
                'green-10': '#2CC887',
                'green-20': '#00af66',
                'green-30': '#31A165',
                'gray-10': '#ecf0f3',
                'gray-20': '#73787D',
                'gray-30': '#3b4663',
                'gray-40': '#222222',
                'orange-10': '#fff5ee',
                'orange-20': '#ff8642',
                'orange-30': '#ff5c00',
            },
            fontFamily: {
                'ALSHaussBold': ['ALSHaussBold'],
                'ALSHaussRegular': ['ALSHaussRegular']
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/container-queries'),
        require('flowbite/plugin'),
        require('preline/plugin'),
    ],
};
