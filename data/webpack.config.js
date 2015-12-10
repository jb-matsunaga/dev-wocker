module.exports = {
    entry: {
        index: './src/js/index',
        single: './src/js/single',
        category: './src/js/category',
        tag: './src/js/tag',
        contact: './src/js/contact',
        faq: './src/js/faq'
    },
    output: {
        filename: '[name].min.js'
    }
};
