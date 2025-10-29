module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./storage/framework/views/*.php",
    "./node_modules/flowbite/**/*.js" // Remove if not using Flowbite
  ],
  theme: {
    extend: {
         colors: {
        teal: {
          DEFAULT: '#2EC4B6',
          600: '#25a99a',
          dark: '#25a99a', 
        },
        'midnight-blue': '#0F1B2D',
        silver: '#C0C0C0',
      },

       animation: {
         'float-slow': 'float 6s ease-in-out infinite',
         'float-fast': 'float 4s ease-in-out infinite',
            },
        keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-20px)' },
                }
            },

          backdropBlur: {
                sm: '4px',
                md: '8px',
                lg: '12px',
            },
            backdropBrightness: {
                90: '.90',
            },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}