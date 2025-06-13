const path = require('path');
const fs = require('fs');

function resolve(dir) {
  const dirPath = path.join(__dirname, dir);
  return fs.readdirSync(dirPath)
    .filter(file => fs.statSync(path.join(dirPath, file)).isFile() && path.extname(file) === '.js')
    .map(file => `./${dir}/${file}`);
}
const pages = resolve('pages');
console.log(pages);

module.exports = {
  entry: {
    pages: pages
  },
  output: {
    filename: 'bundle.js',
    path: __dirname + '/',
  },
  mode: "development",
};