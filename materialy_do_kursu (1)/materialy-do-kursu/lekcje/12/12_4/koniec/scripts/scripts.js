let users = ['jan22','nowy33', 'admin1'];
localforage.setItem('usernames', users).then(function(value){
	console.log(value);
});

localforage.getItem('color').then(function(value){
	console.log(value);
});

localforage.length().then(function(length){
	console.log(length);
});