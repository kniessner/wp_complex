
var HtmlWebpackPlugin = require('html-webpack-plugin');
var webpack = require('webpack');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var CopyWebpackPlugin = require('copy-webpack-plugin');


module.exports = function(env) {
    return {
        devtool: 'eval-source-map',
        entry: "./src/main.jsx",
        output: {
            path: __dirname + "/core/js",
            filename: "bundle.js"
        },
        devtool: 'eval-source-map',
     
         module: {
            loaders: [
                {test: /\.html$/, loader: 'raw-loader', exclude: /node_modules/},
                {test: /\.css$/, loader: "style-loader!css-loader", exclude: /node_modules/},
                {test: /\.scss$/, loader: "style-loader!css-loader!sass-loader"},
                {test: /\.less$/, loader: "style-loader!css-loader!less-loader"},
                {test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/, loader: 'url-loader'},
                {test: /\.woff2(\?v=\d+\.\d+\.\d+)?$/, loader: "url?limit=10000&mimetype=application/font-woff"},
                {test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/, loader: "url?limit=10000&mimetype=application/octet-stream"}, 
                {test: /\.eot(\?v=\d+\.\d+\.\d+)?$/, loader: "file"}, 
                {test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,loader: "url?limit=10000&mimetype=image/svg+xml"},
                {test: /\.jsx?$/, loader: 'babel-loader', exclude: /node_modules/, query: { presets: ['react', 'es2015', 'stage-1']}},
                {test: /\.(jpe?g|png|gif|svg)$/i,loaders: [ 'file-loader?hash=sha512&digest=hex&name=[hash].[ext]','image-webpack-loader?bypassOnDebug&optimizationLevel=7&interlaced=false']}
            ],
            rules: [
            {
                test: /\.scss$/,
                use: [
                {
                    loader: "style-loader" // creates style nodes from JS strings
                }, {
                    loader: "css-loader" // translates CSS into CommonJS
                }, {
                    loader: "sass-loader" // compiles Sass to CSS
                }, {
                    loader: "postcss-loader"
                }

                ]
            },
            {
                test: /\.css$/,
                use: ["style-loader", "css-loader", "postcss-loader"]
            },
            {
                test:  /\.js(x)$/,
                loader: "babel-loader" // Do not use "use" here
            
            }
            ]
              
            
        },

         plugins: [
            //new webpack.HotModuleReplacementPlugin(),
            new webpack.LoaderOptionsPlugin({
                 // test: /\.xxx$/, // may apply this only for some modules
                 options: {
                     eslint: {
                        configFile: '.eslintrc',
                        failOnWarning: false,
                        failOnError: false
                    }
                 }
               }),
            new webpack.ProvidePlugin({ // inject ES5 modules as global vars
              $: 'jquery',
              jQuery: 'jquery',
              'window.jQuery': 'jquery',
              Popper: ['popper.js', 'default'],
              Tether: 'tether'
            })
          ],
      
    }
}