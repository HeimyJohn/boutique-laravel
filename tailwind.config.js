/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
      extend: {
          colors: {
              "yellow-figma": "#ffd400", // yellow
              "purple-figma": "#5540bf", // purple
              "blue-figma": "#209fdf", // blue
              "white-figma": "#f7f7f7", // white
              "black-figma": "#080808", // white
              "gray-figma": "#3e3e3e", // gray
              "blue-variant-figma": "#005e8d", // blue-variant
              "pink-figma": "#e96379", // pink
          },
          dropShadow: {
              'white': '0 0px 50px rgb(180, 180, 180, 0.5)',
          }
      },
   },
  plugins: [
      require("daisyui"),
      // require('@tailwindcss/aspect-ratio'),
  ],
  darkMode: 'selector',
}
// module.exports = {
//   darkMode: 'selector',
// }

// module.exports = {
//     theme: {
//         screens: {
//             sm: '480px',
//             md: '768px',
//             lg: '976px',
//             xl: '1440px',
//         },
//         colors: {
//             'blue': '#1fb6ff',
//             'pink': '#ff49db',
//             'orange': '#ff7849',
//             'green': '#13ce66',
//             'gray-dark': '#273444',
//             'gray': '#8492a6',
//             'gray-light': '#d3dce6',
//         },
//         fontFamily: {
//             sans: ['Graphik', 'sans-serif'],
//             serif: ['Merriweather', 'serif'],
//         },
//         extend: {
//             spacing: {
//                 '128': '32rem',
//                 '144': '36rem',
//             },
//             borderRadius: {
//                 '4xl': '2rem',
//             }
//         }
//     }
// }
