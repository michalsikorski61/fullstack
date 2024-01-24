localStorage.setItem('color','blue');
var color = localStorage.getItem('color');
console.log(color);
localStorage.removeItem('color');


var options = {};
options.color = 'blue';
options.user = 'kaswery';
options.id = 2342542;
localStorage.setItem('options',JSON.stringify(options));
var data = JSON.parse(localStorage.getItem('options'));
console.log(data);