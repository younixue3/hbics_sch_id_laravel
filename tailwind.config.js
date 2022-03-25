module.exports = {
  content: [
    "./resources/**/*.{blade.php, js, vue}",
      "./resources/js/components/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
            'raleway' : ['"Raleway"'],
        }
    },
  },
  plugins: [
      'postcss-import'
  ],
}
