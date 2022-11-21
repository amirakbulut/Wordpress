function withOpacityValue(variable) {
  return ({ opacityValue }) => {
    if (opacityValue === undefined) {
      return `rgba(${variable})`
    }
    return `rgba(${variable}, ${opacityValue})`
  }
}

module.exports = {
  content: [
    "./*.php",
    "./**/*.php"
  ],
  theme: {
    // fontFamily: {
    //   'text': '\'johnston\'',
    //   'title': '\'magneta\''
    // },
    fontSize: {
      'tiny': '.857rem',    // 12
      'small': '0.875rem',  // 14
      'base': '1rem',
      'large': '1.125rem',  // 18

      'h1': '1.8rem',
      'h2': '1.6rem',
      'h3': '1.4rem',
      'h4': '1.2rem',
      'h5': '1.1rem',
      
      'h1-xs': '2rem',
      'h2-xs': '1.6rem',
      'h3-xs': '1.35rem',
      'h4-xs': '1.2rem',
      'h5-xs': '1.1rem',
      
      'h1-sm': '2rem',
      'h2-sm': '1.9rem',
      'h3-sm': '1.5rem',
      'h4-sm': '1.2rem',
      'h5-sm': '1.1rem',
      
      'h1-md': '2.5rem',
      'h2-md': '2rem',
      'h3-md': '1.65rem',
      'h4-md': '1.5rem',
      'h5-md': '1.4rem',

      'h1-lg': '3rem',
      'h2-lg': '2rem',
      'h3-lg': '1.8rem',
      'h4-lg': '1.6rem',
      'h5-lg': '1.5rem',

    },
    colors: {
      'primary': {
        '50': '#fff8f8',
        '100': '#eee8e6',
        '150': '#e5ddda',
        '200': '#dcd1cd',
        '250': '#d4c6c1',
        '300': '#cbbbb4',
        '350': '#c2afa8',
        '400': '#b9a49b',
        '450': '#b1988f',
        DEFAULT: '#97796d',
        '550': '#977f75',
        '600': '#867168',
        '650': '#76635b',
        '700': '#65554e',
        '750': '#544741',
        '800': '#433834',
        '850': '#322a27',
        '900': '#221c1a',
        '950': '#110e0d'
      },
      'beige' : '#fbf9f800',
      'white': {
        DEFAULT: 'white',
        'transparent': '#ffffff66'
      },
      'black': 'black'
    },
    screens: {
      'xs': '425px',
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1400px',
      // '3xl': '1450px',
    },
    container: {
      center: true,
      padding: '2.5rem',
    },
    extend: {
    }
  },
  plugins: [],
}
