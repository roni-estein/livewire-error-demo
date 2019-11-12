const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  theme: {
    screens: {
      xs: '440px',
      sm: '576px',
      md: '768px',
      lg: '992px',
      xl: '1200px',
    },
    fontSize: {
      'xx': '0.550rem',
      'xs': '.625rem',     // 10px
      'sm': '.75rem',     // 12px
      'base': '.875rem',    // 14px
      'lg': '1rem',     // 16px
      'xl': '1.125rem',   // 18px
      '2xl': '1.25rem',    // 20px
      '3xl': '1.5rem',    // 24px
      '4xl': '1.75rem',  // 28px
      '5xl': '2.25rem',   // 36px
      '6xl': '3rem',      // 48px
      '7xl': '4rem',      // 48px
    },

    extend: {
      fontFamily: {
        sans: [
          'Avenir Next',
          'Proxima Nova',
          ...defaultTheme.fontFamily.sans,
        ],
        header: [
          'Montserrat',
          ...defaultTheme.fontFamily.sans,
        ]
      },
      colors: {
        brand: { ...defaultTheme.colors.teal },
        smoke: {
          '100': 'rgba(0, 0, 0, 0.1)',
          '200': 'rgba(0, 0, 0, 0.2)',
          '300': 'rgba(0, 0, 0, 0.3)',
          '400': 'rgba(0, 0, 0, 0.4)',
          '500': 'rgba(0, 0, 0, 0.5)',
          '600': 'rgba(0, 0, 0, 0.6)',
          '700': 'rgba(0, 0, 0, 0.7)',
          '800': 'rgba(0, 0, 0, 0.8)',
          '900': 'rgba(0, 0, 0, 0.9)',
        },
        turquoise: {
          '100': '#BDDBED',
          '200': '#A2E1F3',
          '300': '#80d6ef',
          '400': '#71c2f5',
          '500': '#1899be',
          '600': '#0E7BBF',
          '700': '#094d78',
          '800': '#041f30',
          '900': '#03111B',
        },
        'white-alpha': 'hsla(0, 0%, 100%, 0.15)',
        'white-semi-trans': 'hsla(0, 0%, 100%, 0.65)',
      },
      boxShadow: theme => ({
        outline: `0 0 0 3px ${theme('colors.brand.500')}60`,
      }),
      width: {
        '7': '1.75rem',
        '14': '3.5rem',
      },
      height: {
        '7': '1.75rem',
        '80': '20rem',
        '96': '24rem',
        '128': '32rem',
        '192': '48rem',
        '256': '64rem',
      },
      customForms: theme => ({
        default: {
          'input, textarea, multiselect, select': {
            borderRadius: theme('borderRadius.none'),
            borderColor: theme('colors.gray.400'),
            borderWidth: theme('width.px'),
            fontSize: theme('fontSize.sm'),
            boxShadow: theme('boxShadow.md'),
            paddingTop: theme('padding.3'),
            paddingBottom: theme('padding.3'),
          },
          checkbox: {
            height: theme('height.5'),
            width: theme('width.5'),
            boxShadow: theme('boxShadow.md'),
            color: theme('colors.brand.600'),
          },
          radio: {
            boxShadow: theme('boxShadow.md'),
            height: theme('height.5'),
            width: theme('width.5'),
            color: theme('colors.brand.600'),
            icon: '<svg fill="#fff" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="4.5"/></svg>'
          },
          'input, textarea, multiselect, select, checkbox, radio': {
            '&:focus': {
              borderColor: theme('colors.brand.400'),
              boxShadow: theme('boxShadow.outline'),
              transition: 'box-shadow 100ms ease-in-out',
            },
          },

        },
        required: {
          'input, textarea, multiselect, select': {
            borderRadius: theme('borderRadius.none'),
            borderColor: theme('colors.gray.600'),
            borderWidth: theme('width.px'),
            fontSize: theme('fontSize.sm'),
            boxShadow: theme('boxShadow.md'),
            paddingTop: theme('padding.3'),
            paddingBottom: theme('padding.3'),
            paddingLeft: theme('padding.3'),

          },
        },
      }),
    }
  },
  variants: {
    backgroundColor: ['responsive', 'hover', 'focus', 'active'],
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
  ]
}