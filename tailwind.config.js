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
        'primary': '#fca103',
        'secondary': '#f5ba6e',
        'hover': '#faedcd',
    }
  },
  plugins: [],
  }
}