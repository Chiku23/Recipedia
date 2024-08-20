/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
      maxWidth:{
        "1140" : "1140px",
        "420": "420px",
      },
      colors: {
        "blue-2": "#0123ee",
        "green-2": "#008000",
        "gray": "#808080"
      },
    },
    
  },
  plugins: [],
}

