var x = 10;
var y = 1;

function fn1(a) {
	return ++a;	
}

function fn2(a) {
	return ++a;
}

var result = fn1(x)/fn2(y);
console.log(result);