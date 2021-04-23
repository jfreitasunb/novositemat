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
        azulMAT2: '#285ba6',
        azulMAT3: '#00479e',
        amareloMAT: '#F0EE0B',
        verdeMAT: '#449D44',
        noticias: '#E4E4E4'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
