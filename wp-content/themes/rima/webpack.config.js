const Path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    mode: 'development',
    watch: true,
    // context: Path.resolve(__dirname, 'assets'),
    entry: {
        main: [
            './assets/js/index.js',
            '/assets/css/index.css'
        ],
        admin: [
            '/assets/js/admin.js'
        ]
        // filter: ['./assets/src/filter.js']
    },
    output: {
        filename: '[name].js',
        path: Path.resolve(__dirname, 'assets/dist')
    },
    plugins: [
        new MiniCssExtractPlugin()
    ],
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: 'css-loader',
                        options: {
                            importLoaders: 1
                        }
                    },
                    // 'style-loader',
                    // {
                    //     loader: 'css-loader',
                    //     options: { importLoaders: 1 }
                    // },
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                plugins: [
                                    'tailwindcss',
                                    'autoprefixer'
                                ]
                            }
                        }
                    }
                ]
            }
        ]
    }
}