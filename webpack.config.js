const path = require('path');

module.exports = {
  entry: [
    './js/fadeAnimations.js', // 'fadeAnimations': './js/fadeAnimations.js',
    './js/slider.js' // 'slider': './js/slider.js'
  ],
  // Вихідна збірка
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
    clean: true
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: { 
            presets: ['@babel/preset-env'] 
          }
        }
      },
      {
        test: /\.(png|svg|jpg|jpeg|gif)$/i,
        type: 'asset/resource'
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/i,
        type: 'asset/resource'
      }
    ]
  },
  devServer: {
    static: {
      directory: path.join(__dirname, 'dist')
    },
    compress: true,
    port: 9000
  },
  mode: 'development'
};
