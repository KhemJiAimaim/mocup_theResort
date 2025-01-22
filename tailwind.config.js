/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        kanit: ['Kanit', 'sans-serif'],         
        afacadFlux: ['"Afacad Flux"', 'sans-serif'],          
        robotoSerif: ['Roboto Serif', 'serif'], 
      },
    },
  },
  
  plugins: [],
}