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
        'gold': '#BC8947',
        'softgold': '#c9a06b',
        'primary': '#2e2e2e',
        'secondary': '#575757',
        // primary: '#BC8947',
        // secondary: '#c9a06b',
        // accent: '#a64c4c',
      }
    },
  },
  plugins: [],
}

