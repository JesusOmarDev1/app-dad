/** @type {import('tailwindcss').Config} */

module.exports = {
  darkMode: ["class"],
  content: [
    "./src/views/**/*.php",
    "./index.php",
    "./404.php",
    "./500.php",
    "./mantenimiento.php",
    "./node_modules/preline/dist/*.js",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          50: "#fff8ec",
          100: "#fff0d3",
          200: "#ffdea5",
          300: "#ffc56d",
          400: "#ffa132",
          500: "#ff840a",
          600: "#ef6400",
          700: "#cc4c02",
          800: "#a13b0b",
          900: "#82330c",
          950: "#461704",
        },
        secondary: {
          50: "#edf8ff",
          100: "#d6edff",
          200: "#b5e0ff",
          300: "#83cfff",
          400: "#48b3ff",
          500: "#1e8fff",
          600: "#066eff",
          700: "#034bff",
          800: "#0844c5",
          900: "#0d3e9b",
          950: "#0e275d",
        },
        terciary: {
          50: "#f6f6f6",
          100: "#e7e7e7",
          200: "#d1d1d1",
          300: "#b0b0b0",
          400: "#888888",
          500: "#6d6d6d",
          600: "#585858",
          700: "#4f4f4f",
          800: "#454545",
          900: "#3d3d3d",
          950: "#262626",
        },
      },
      fontFamily: {
        Inter: ["./src/resources/fonts/inter-latin-wght-normal.woff2", "Inter"],
      },
      keyframes: {
        "infinite-slide": {
          to: { transform: "translateX(calc(-50% - 1rem))" },
        },
      },
      animation: {
        "infinite-slide": "infinite-slide 10s linear infinite",
      },
    },
  },
  plugins: [require("preline/plugin")],
};
