const Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('app', './assets/app.js')
    .splitEntryChunks()
    .enableStimulusBridge('./assets/controllers.json')
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.38';
    })
    .enablePostCssLoader()
;

const config = Encore.getWebpackConfig();

// 👉 Ajout du dev-server ici :
config.devServer = {
    static: {
        directory: './public'
    },
    liveReload: true,
    hot: false,
    watchFiles: [
        'templates/**/*.twig',
        'src/**/*.php'
    ],
    client: {
        overlay: false,
        logging: 'info',
        progress: true
    }
};

module.exports = config;
