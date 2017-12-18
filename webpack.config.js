'use strict';

const path = require('path');
const webpack = require('webpack');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const StatsPlugin = require('stats-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

//setting this variable here, and not in env vars, allows for local testing
const isOptimizedBuild = false && process.env.ENVIRONMENT_NAME !== "local";

const extractCss = new ExtractTextPlugin({
    filename: "[name].min.css",
    disable: !isOptimizedBuild
});

var config = {
    watch: true,
    // The entry file. All your app roots fromn here.
    entry: {
      'index': path.join(__dirname, 'assets/scripts/index.js')
    },
    // Where you want the output to go
    output: {
        path: path.join(__dirname, './dist'),
        filename: isOptimizedBuild ? '[name].min.js' : '[name].js',
        publicPath: '/'
    },
    plugins: [
        // webpack gives your modules and chunks ids to identify them. Webpack can vary the
        // distribution of the ids to get the smallest id length for often used ids with
        // this plugin
        new webpack.optimize.OccurrenceOrderPlugin(),

        //extract css into a file, only happens on prod
        extractCss,

        // creates a stats.json
        new StatsPlugin('webpack.stats.json', {
            source: false,
            modules: false
        }),

        new webpack.ProvidePlugin({
          $: 'jquery',
          jQuery: 'jquery',
          'window.jQuery': 'jquery',
          Util: "exports-loader?Util!bootstrap/js/dist/util",
          Carousel: "exports-loader?Util!bootstrap/js/dist/carousel"
        }),

        // plugin for passing in data to the js, like what NODE_ENV we are in.
        // need NODE_ENV to be `production` for react to use prod version
        new webpack.DefinePlugin({
            'process.env' : {
              'IS_PROD'          : JSON.stringify(process.env.IS_PROD)
            },
        }),

        new CopyWebpackPlugin([
          { from: 'assets/images', to: 'dist/images' },
        ])
    ],

    module: {
      loaders: [
          {
              test: /\.js(x?)?$/,
              exclude: /node_modules/,
              loader: 'babel-loader'
          },

          {
              test: /\.json?$/,
              loader: 'json-loader'
          },

          {
              test: /\.scss$/,
              use: extractCss.extract({
                  use: [{
                      loader: "css-loader",
                      options: {
                        minimize: isOptimizedBuild
                      }
                  }, {
                      loader: "postcss-loader"
                  }, {
                      loader: "sass-loader"
                  }],
                  // use style-loader when not prod
                  fallback: "style-loader"
              })
          },

          { test: /\.woff(2)?(\?[a-z0-9#=&.]+)?$/, loader: 'url-loader?limit=10000&mimetype=application/font-woff&name=dist/static/[name].[ext]' },

          { test: /\.(ttf|eot|svg)(\?[a-z0-9#=&.]+)?$/, loader: 'file-loader?name=dist/static/[name].[ext]' }
      ]
    }
}

if (isOptimizedBuild) {
  config.plugins.push(
    // handles uglifying js
    new webpack.optimize.UglifyJsPlugin({
        compressor: {
            warnings: false,
            screw_ie8: true
        }
    })
  )
}

module.exports = config;
