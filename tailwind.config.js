/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        dark: "#0366d6",
        primary: "rgba(20, 184, 166, var(--tw-text-opacity))"
      }
    },
  },
  plugins: [],
}
