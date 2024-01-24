var user = {
	username: 'tnowak',
	email: 'tnowak@strefakursow.pl',
	age: 23,
	isAdmin: false,
	showGreeting: function() {
		return 'Witaj ' + this.username;
	}
};

user.age = 30;
console.log(user.age);