module.exports = {
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        azulMAT1: '#00427e',
        azulMAT3: '#00479e',
        amareloMAT: '#F0EE0B',
        verdeMAT: '#449D44'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
