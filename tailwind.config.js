/** @type {import('tailwindcss').Config} */
export default {
  prefix: 'tw-',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#BC8947',
        secondary: '#c9a06b',
        accent: '#a64c4c',
      }
    },
  },
  plugins: [],
}

