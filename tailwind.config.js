/** @type {import('tailwindcss').Config} */

module.exports = {
  darkMode: ['class'],
  content: [
    './src/views/**/*.php',
    './index.php',
    './404.php',
    './500.php',
    './maintenance.php',
    './node_modules/preline/dist/*.js',
  ],
  theme: {
    extend: {
      keyframes: {
        'infinite-slide': {
          to: { transform: 'translateX(calc(-50% - 1rem))' },
        },
      },
      animation: {
        'infinite-slide': 'infinite-slide 10s linear infinite',
      },
    },
  },
  plugins: [require('preline/plugin')],
}
