const path = require('path');
const fs = require('fs');

function resolve(dir) {
  const dirPath = path.join(__dirname, dir);
  return fs.readdirSync(dirPath)
    .filter(file => fs.statSync(path.join(dirPath, file)).isFile() && path.extname(file) === '.js')
    .reduce((entries, file) => {
      const name = path.basename(file, '.js');
      entries[name] = `./${dir}/${file}`;
      return entries;
    }, {});
}
const pages = resolve('pages');
console.log(pages);

module.exports = {
  entry: pages,
  output: {
    filename: '[name].js',
    path: __dirname + '/dist',
  },
  mode: "development",
};