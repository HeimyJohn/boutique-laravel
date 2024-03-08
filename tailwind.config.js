/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      height: {
        '168': '42rem',
      },

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
      },
    },
  },
  plugins: [
    require("daisyui"),
    require('@tailwindcss/forms'),
  ],
}