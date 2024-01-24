var user = {
    username: 'tnowak',
    email: 'tnowak@gmail.com',
    age: 23,
    isAdmin: false,
    showGreeting:function(){
        return 'Witaj ' + this.username;
    }
};

// console.log(user.isAdmin);
// console.log(user.showGreeting());
user.age = 28;
console.log(user.age);