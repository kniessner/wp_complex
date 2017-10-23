
var webpack = require('webpack')

module.exports = function(env) {
    return {
        entry: "./src/main.js",
        output: {
            path: __dirname + "/core/js",
            filename: "bundle.js"
        },
         module: {
            loaders: [
                {test: /\.html$/, loader: 'raw-loader', exclude: /node_modules/},
                {test: /\.css$/, loader: "style-loader!css-loader", exclude: /node_modules/},
                {test: /\.scss$/, loader: "style-loader!css-loader!sass-loader", exclude: /node_modules/},
                {test: /\.less$/, loader: "style-loader!css-loader!less-loader"},
                {test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/, loader: 'url-loader'},
                {test: /\.woff2(\?v=\d+\.\d+\.\d+)?$/, loader: "url?limit=10000&mimetype=application/font-woff"},
                {test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/, loader: "url?limit=10000&mimetype=application/octet-stream"}, 
                {test: /\.eot(\?v=\d+\.\d+\.\d+)?$/, loader: "file"}, 
                {test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,loader: "url?limit=10000&mimetype=image/svg+xml"}
            ],
            rules: [{
                test: /\.scss$/,
                use: [{
                    loader: "style-loader" // creates style nodes from JS strings
                }, {
                    loader: "css-loader" // translates CSS into CommonJS
                }, {
                    loader: "sass-loader" // compiles Sass to CSS
                }]
            }]
        },
         plugins: [
            new webpack.HotModuleReplacementPlugin(),
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