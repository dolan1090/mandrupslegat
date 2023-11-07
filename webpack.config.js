const path = require('path');
const devMode = true;
const MiniCssExtractPlugin = require("mini-css-extract-plugin");  

module.exports = {
    mode: devMode ? 'development' : 'production',
    entry: [
        './src/index.js',
    ],
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'dist'),
    },
    optimization: {
        // We no not want to minimize our code.
        //minimize: false
    },
    plugins: [new MiniCssExtractPlugin()],
    devtool: 'source-map',
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [MiniCssExtractPlugin.loader, "css-loader"],
            },
            {
                test: /\.scss$/,
                use: [ MiniCssExtractPlugin.loader, {
                    loader: 'css-loader',
                    options: { url: false }
                },
                'sass-loader']
            },
            {
                test: /\.(png|jpe?g|gif|svg|eot|ttf|woff|woff2)$/i,
                loader: 'file-loader',
                options: {
                    name: '[path][name].[ext]',
                },
            },
        ],
    },
};