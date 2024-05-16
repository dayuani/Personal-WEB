/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./index.html'],
  darkMode: 'class',
        theme: {
          container:{
            center: true,
            padding: '16px',
          },
      
            extend: {
              colors: {
                'primary': '#E78895',
                'pastel': '#e6a4b4',
                'peach': '#F3D7CA',
                'begie': '#FFF8E3',
                'grey': '#F5EEE6',
                'oldpink': '#831843',
                'brown': '#431407',
                'pinkeun':'#9d174d',
              },
              screens:{
                '2xl': '1320px',
              },
      
                fontFamily: {
                    Poppins: ['Poppins']
                },

            animation: {
                'spin-slow': 'spin 5s linear infinite',
                'goyang': 'goyang 1s ease-in-out infinite',
            },
            }
        },
  plugins: [],
}

