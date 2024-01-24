// localStorage.setItem('color', 'blue');
// localStorage.removeItem('color');
// var color = localStorage.getItem('color');
// console.log(color);

var options = {};
options.user = 'ksawery';
options.color = 'blue';
options.id = 2344;

localStorage.setItem('options', JSON.stringify(options));
var data = JSON.parse(localStorage.getItem('options'));
console.log(data.id);