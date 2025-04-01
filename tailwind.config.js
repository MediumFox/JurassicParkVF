module.exports = {
    darkMode: 'class', // 👈 active le dark mode via classe CSS
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
  