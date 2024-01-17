/** @type {import('tailwindcss').Config} */
export default {
 
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        color1: '#DBF060' ,
        color2: '#3CE670',
        color3: '#FFFE29' , 
        color4: '#1CFC4A',
        color6: '#1CFC4A',
        color7: '#16E080' , 
        color8: "#F1C601"
      },
    },
  },
  plugins: [],
}

