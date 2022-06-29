const path = require('path');

const isProductionMode = process.env.NODE_ENV == 'production';

module.exports = {
    mode: isProductionMode ? 'production' : 'development',
    entry: './src/main.js',
    output: {
        path: path.resolve(__dirname, 'assets/js'),
        filename: isProductionMode ? 'main.min.js' : 'main.js',
    },

    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: 'babel-loader'
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            },
            {
                test: /\.less$/i,
                use: [
                  "css-loader",
                  "less-loader",
                ],
            },
        ]
    }
}
