/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    container: {
      center: true,
      padding: '16px'
    },
    extend: {
      colors: {
        dark: "#4477CE",
        primary: "#FF76CE",
        secondary: "#64748b"
      }
    },
  },
  plugins: [],
}
