module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      container: {
        center: true,
        padding: '2rem',
      },
      colors: {
        'blue': {
          DEFAULT: '#29A9E1',
          '50': '#DEF2FA',
          '100': '#CAEAF8',
          '200': '#A2DAF2',
          '300': '#7AC9EC',
          '400': '#51B9E7',
          '500': '#29A9E1',
          '600': '#1E9CD3',
          '700': '#1A8BBD',
          '800': '#177BA6',
          '900': '#146A90'
        },
        'orange': {
          DEFAULT: '#E6CF23',
          '50': '#FDFCF1',
          '100': '#FBF7DA',
          '200': '#F6EDAC',
          '300': '#F0E37F',
          '400': '#EBD951',
          '500': '#E6CF23',
          '600': '#D2BC18',
          '700': '#B7A415',
          '800': '#9C8B12',
          '900': '#80730F'
        },
        'green': {
          DEFAULT: '#00653D',
          '50': '#BEFFE5',
          '100': '#98FFD6',
          '200': '#4CFFB8',
          '300': '#00FE99',
          '400': '#00B26B',
          '500': '#00653D',
          '600': '#005634',
          '700': '#00462B',
          '800': '#003721',
          '900': '#002818'
        },
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
