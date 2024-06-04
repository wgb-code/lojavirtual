/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
    fontFamily: {
      'poppins': ['Poppins', 'sans-serif'],
      'gentium': ['Gentium Plus', 'sans-serif']
    },
    colors: {
      'bg-primary': '#191919',
      'bg-secondary': '#363636',
      'text-primary': '#EEEEEE',
      'text-danger': '#E72929'
    },
  },
  plugins: [],
}

