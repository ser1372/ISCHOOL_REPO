
module.exports = {
  content: [
    './resources/views/**/*',
    './resources/js/**/*.vue',
  ],
    theme: {
        fontFamily: {
            sans: ["'SF Pro Display', 'sans-serif'"],
        },
    },
  plugins: [require('@tailwindcss/forms')],
};
