const path = require('path')
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const autoPrefixer = require('autoprefixer')

const Webpack = require('webpack')

module.exports = (env, options) => {
  const isDevMode = options.mode === 'development'
  const config = {
    mode: options.mode,
    target: 'web',
    optimization: {
      minimizer: [
        new UglifyJsPlugin({
          cache: true,
          parallel: true,
          sourceMap: true // set to true if you want JS source maps
        })
      ]
    },
    entry: {
      archives: path.resolve('src', 'archives.js'),
      categories: path.resolve('src', 'categories.js'),
      home: path.resolve('src', 'home.js'),
      main: path.resolve('src', 'main.js'),
      singles: path.resolve('src', 'singles.js'),
      editor: path.resolve('src', 'editor.js')
    },
    output: {
      path: path.resolve('build'),
      publicPath: '/app/themes/megane-v1.2/',
      filename: '[name].bundle.js',
      chunkFilename: '[name]-[chunkhash].js'
    },
    devtool: (isDevMode) ? 'inline-source-map' : false,
    resolve: {
      alias: {
        'jquery-extensions': path.resolve('jquery-plugins', 'index.js'),
        styles: path.resolve('src', 'styles')
      }
    },
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules/,
          use: {
            loader: 'babel-loader',
            options: {
              envName: (isDevMode) ? 'development' : 'production'
            }
          }
        },
        {
          test: /\.(sa|sc|c)ss$/,
          use: [
            isDevMode ? 'style-loader' : MiniCssExtractPlugin.loader,
            {
              loader: 'css-loader',
              options: {
                sourceMap: true,
                importLoaders: 1
              }
            },
            {
              loader: 'postcss-loader',
              options: {
                plugins: () => [
                  autoPrefixer,
                  require('cssnano')({
                    preset: 'default'
                  })
                ]
              }
            },
            'sass-loader'
          ]
        },
        {
          test: /\.json$/,
          exclude: /node_modules/,
          loader: 'json-loader'
        },
        {
          test: /\.(jpe?g|png|gif|svg|ico)$/i,
          use: [
            {
              loader: 'file-loader',
              options: {
                outputPath: 'assets/'
              }
            }
          ]
        },
        {
          test: /\.(ttf|eot|woff|woff2)$/,
          use: {
            loader: 'file-loader',
            options: {
              name: 'fonts/[name].[ext]'
            }
          }
        },
        {
          test: require.resolve('jquery'),
          use: [
            {
              loader: 'expose-loader',
              options: 'jQuery'
            },
            {
              loader: 'expose-loader',
              options: '$'
            }
          ]
        }
      ]
    },
    plugins: [
      new Webpack.LoaderOptionsPlugin({
        minimize: (env === 'production'),
        debug: false
      }),
      new MiniCssExtractPlugin({
        filename: isDevMode ? '[name].css' : '[name].[hash].css',
        chunkFilename: isDevMode ? '[id].css' : '[id].[hash].css'
      })
    ]
  }

  if (options.mode === 'development') {
    config.plugins.push(
      new BrowserSyncPlugin({
        proxy: 'www.megane.local',
        port: 3000,
        files: [
          '**/*.php',
          '**/*.twig'
        ],
        ghostMode: {
          clicks: false,
          location: false,
          forms: false,
          scroll: false
        },
        injectChanges: true,
        logFileChanges: true,
        logLevel: 'debug',
        logPrefix: 'webpack',
        notify: true,
        reloadDelay: 0
      })
    )
  }

  return config
}
