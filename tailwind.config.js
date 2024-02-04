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
  corePlugins: {
    container: false
  },
  plugins: [
    function ({ addComponents }) {
      addComponents({
        '.container': {
          width: '100%',
          '@screen sm': {
            maxWidth: '640px',
          },
          '@screen md': {
            maxWidth: '768px',
          },
          '@screen lg': {
            maxWidth: '990px',
          }
        }
      })
    }
  ]
}

