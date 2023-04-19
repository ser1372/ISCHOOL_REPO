module.exports = {
  content: [
    './resources/views/**/*',
    './resources/js/**/*.vue',
  ],
    theme: {
        fontFamily: {
            sans: ['"San Francisco Pro Text"', 'sans-serif'],
        },
    },
  plugins: [require('@tailwindcss/forms')],
};
