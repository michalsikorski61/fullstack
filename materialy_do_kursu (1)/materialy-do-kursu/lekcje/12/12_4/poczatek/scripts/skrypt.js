localforage.setItem('color','blue').then(function(value){//fn uruchomi się jeśli zapisano do bazy
    console.log(value);//value to to co się udało zapisać do bazy

});
let users = ['jan','nowy','admin'];
localforage.setItem('usernames',users).then(function(value){
    console.log(value);
});
localforage.getItem('color').then(function(value){
    console.log(value+'22');
});
localforage.length().then(function(value){
    console.log(value);
});


