module.exports = {
    content: [
      './templates/**/*.html.twig',  // Pour détecter les classes dans les fichiers Twig
      './assets/**/*.js',            // Pour détecter les classes dans le JS
      './src/**/*.php'               // Pour détecter les classes ajoutées en PHP
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  };
  