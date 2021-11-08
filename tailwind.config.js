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
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        bluegray: {
          light: '#E2E8F0',
          DEFAULT: '#64748B',
          dark: '#334155',
        },
        gray: {
          darkest: '#1f2d3d',
          dark: '#3c4858',
          DEFAULT: '#c0ccda',
          light: '#e0e6ed',
          lightest: '#f9fafc',
        }
      },
      
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
