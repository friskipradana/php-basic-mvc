module.exports = {
  parser: require("postcss-comment"),
  plugins: [
    require("postcss-simple-vars"),
    require("postcss-import"),
    require("postcss-mixins"),
    require("@tailwindcss/nesting"),
    require("tailwindcss"),
    require("autoprefixer"),
    // require("cssnano"),
  ],
};
