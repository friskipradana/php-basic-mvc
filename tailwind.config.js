/** @type {import('tailwindcss').Config} */

const defaultTheme = require("tailwindcss/defaultTheme");
module.exports = {
  content: ["./app/views/**/*","./app/core/Flasher.php"],
  // darkMode: "class",
  theme: {
    screens: {
      sm: "640px",
      // => @media (min-width: 640px) { ... }
      md: "768px",
      // => @media (min-width: 768px) { ... }
      lg: "1024px",
      // => @media (min-width: 1024px) { ... }
      xl: "1280px",
      // => @media (min-width: 1280px) { ... }
      "2xl": "1536px",
      // => @media (min-width: 1536px) { ... }
    },
    extend: {
      fontFamily: {
        default: ["Poppins", ...defaultTheme.fontFamily.sans],
        "poppins-light": "Poppins-Light",
        "poppins-medium": "Poppins-Medium",
        "poppins-italic": "Poppins-Italic",
        "poppins-bold": "Poppins-Bold",
      },
      colors: {
        aurora: "var(--aurora)",
      },
      spacing: {
        13: "var(--13)",
      },
      animation: {
        "spin-slow": "spin 3s infinite linear",
        "wiggle-anim": "wiggle 3s infinite linear",
      },
      keyframes: {
        wiggle: {
          "0%,100%": {
            transform: "rotate(-3deg)",
          },
          "50%": {
            transform: "rotate(3deg)",
          },
        },
      },
    },
  },
};
