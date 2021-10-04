module.exports = {
  purge: [
    './resources/views/*.blade.php',
    './resources/js/*.js'
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    extend: {
      container: {
        center: true
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
