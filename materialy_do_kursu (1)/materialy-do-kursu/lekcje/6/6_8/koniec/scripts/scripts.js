function mainFn(a, callback) {
	if (a > 0) {
		callback();
	}
}

mainFn(10, function() {
	console.log('Callback!');
});

