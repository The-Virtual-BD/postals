/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {},
      fontFamily: {
        'poppins': ['Poppins','ui-sans-serif'],
        'inter': ['Inter','ui-sans-serif'],
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'black': '#141125',
        'dblue': '#4361EE',
        'mblue': '#0096C7',
        'blue': '#0582CA',
        'lblue': '#E9F7FF',
        'white': '#FFFFFF',
        'gray': '#CBD5E1',
        'red': '#EF4444',
      },
    },
    plugins: [],
  }



