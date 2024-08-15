/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: { 
      colors: { 
        "black" : "#222"
      }
    },
  },
  plugins: [],
}

