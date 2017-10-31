const BrowserSyncPlugin = require('browser-sync-webpack-plugin')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const Webpack = require('webpack')
const autoPrefixer = require('autoprefixer')

const path = require('path')

const env = process.env.NODE_ENV

const webpack = {
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

  module: {
    rules: [
      {
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
          use: [
            {loader: 'css-loader'}
          ]
        })
      }, // end css rules
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          use: [
            {loader: 'css-loader'},
            {
              loader: 'postcss-loader',
              options: {
                plugins: () => [autoPrefixer]
              }
            },
            {loader: 'sass-loader'}
          ],
          fallback: 'style-loader'
        })
      }, // sass rules
      {
        test: /\.js$/,
        exclude: path.resolve('src'),
        enforce: 'pre',
        loader: 'source-map-loader'
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader'
      },
      {
        test: /\.json$/,
        exclude: /node_modules/,
        loader: 'json-loader'
      },
      {
        test: /\.(png|jpg|woff|woff2|eot|ttf|svg)(\?.*)?$/,
        loader: 'file-loader?name=[path]/[name].[ext]?[hash]'
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
    ] // end rules
  }, // end module

  plugins: [
    new Webpack.LoaderOptionsPlugin({
      minimize: (env === 'production'),
      debug: false
    }),
    new ExtractTextPlugin({
      filename: '[name].style.css',
      allChunks: true
    })
  ],

  resolve: {
    alias: {
      'jquery-extensions': path.resolve('jquery-plugins', 'index.js'),
      styles: path.resolve('src', 'styles')
    }
  }
}

if (env === 'development') {
  webpack.plugins.push(
    new Webpack.DllReferencePlugin({
      context: path.resolve('src'),
      name: '[name]',
      manifest: path.resolve('webpack', 'dlls', 'vendor.json')
    })
  )
  webpack.plugins.push(
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

if (env === 'production') {
  webpack.plugins.push(
    new Webpack.optimize.CommonsChunkPlugin({
      name: 'commons',
      minChunks: Infinity
    })
  )

  webpack.plugins.push(
    // More minification
    new Webpack.optimize.AggressiveMergingPlugin()
  )

  webpack.plugins.push(
    new Webpack.optimize.UglifyJsPlugin({
      beautify: false,
      mangle: {
        screw_ie8: true,
        keep_fnames: true
      },
      compress: {
        screw_ie8: true
      },
      comments: false
    }))
}

module.exports = webpack
