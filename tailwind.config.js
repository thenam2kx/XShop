/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./**/*.{html,js,php}",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        roboto: ["Roboto", "sans-serif"]
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    // ...
  ],
}

