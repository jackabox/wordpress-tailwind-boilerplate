module.exports = {
  theme: {
    screens: {
      sm: '360px',
      md: '560px',
      lg: '768px',
      xl: '960px',
      xxl: '1200px',
      sup: '1500px'
    },
    blockSpacing: {
      px: '1px',
      '0': '0',
      '1': '5px',
      '2': '10px',
      '3': '15px',
      '4': '20px',
      '5': '25px',
      '6': '30px',
      '7': '35px',
      '8': '40px',
      '9': '45px',
      '10': '50px',
      '20': '100px',
      '30': '150px',
      '40': '200px',
      '-1': '-5px',
      '-2': '-10px',
      '-3': '-15px',
      '-4': '-20px',
      '-5': '-25px',
      '-6': '-30px',
      '-7': '-35px',
      '-8': '-40px',
      '-9': '-45px',
      '-10': '-50px',
      '-20': '-100px',
      '-30': '-150px',
      '-40': '-200px',
      'col-1': '8.33333333%',
      'col-2': '16.66666667%',
      'col-3': '25%',
      'col-4': '33.33333333%',
      'col-5': '41.66666667%',
      'col-6': '50%',
      'col-7': '58.33333333%',
      'col-8': '66.66666667%',
      'col-9': '75%',
      'col-10': '83.33333333%',
      'col-11': '91.66666667%',
      'col-12': '100%'
    },
    spacing: {
      auto: 'auto',
      '1/12': '8.33333333%',
      '2/12': '16.66666667%',
      '3/12': '25%',
      '4/12': '33.33333333%',
      '5/12': '41.66666667%',
      '6/12': '50%',
      '7/12': '58.33333333%',
      '8/12': '66.66666667%',
      '9/12': '75%',
      '10/12': '83.33333333%',
      '11/12': '91.66666667%',
      '12/12': '100%',
      '1/5': '20%',
      '2/5': '40%',
      '3/5': '60%',
      '4/5': '80%',
      '5/5': '100%',
      full: '100%'
    },
    width: theme => ({
      ...theme('spacing'),
      screen: '100vw'
    }),
    height: theme => ({
      screen: '100vh',
      auto: 'auto'
    }),
    minHeight: theme => ({
      '50px': '50px',
      '40px': '40px',
      '30px': '30px',
      '60px': '60px',
      '76px': '76px',
      '100px': '100px',
      '220px': '220px',
      screen: '100vh',
      auto: 'auto'
    }),
    maxWidth: theme => ({
      ...theme('spacing'),
      screen: '100vw',
      '200px': '200px'
    }),
    minWidth: theme => ({
      ...theme('spacing'),
      screen: '100vw'
    }),
    margin: theme => ({
      ...theme('blockSpacing')
    }),
    padding: theme => ({
      ...theme('blockSpacing')
    }),
    extend: {
      fontSize: theme => ({
        '24px': '1.5rem'
      }),
      fontFamily: {
        sans: [
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          '"Helvetica Neue"',
          'Arial',
          '"Noto Sans"',
          'sans-serif',
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"'
        ]
      }
    }
  },
  variants: {},
  plugins: []
}
