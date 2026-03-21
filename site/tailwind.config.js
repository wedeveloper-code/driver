/** @type {import('tailwindcss').Config} */
export default {
  content: ['./*.html', './src/**/*.{js,ts}'],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      colors: {
        brand: {
          blue: '#1e3a8a',
          light: '#3b82f6',
          accent: '#f59e0b',
          accentHover: '#d97706',
        }
      }
    }
  },
  plugins: [],
}
