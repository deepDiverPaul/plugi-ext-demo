/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.{html,js,php}",
    "./blocks/**/*.{html,js,php}",
    "./backend/**/*.{html,js,php}",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require("daisyui")
  ],
  daisyui: {
    prefix: 'ext--demo'
  },
  corePlugins: {
    preflight: false,
  }
}

