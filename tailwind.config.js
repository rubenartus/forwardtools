/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './site/templates/**/*.php',
    './site/snippets/**/*.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        worksans: ['WorkSans', 'sans-serif'],
      },
    },
  },
  plugins: [],
}

