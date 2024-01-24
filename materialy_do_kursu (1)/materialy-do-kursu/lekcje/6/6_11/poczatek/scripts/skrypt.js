var request = new XMLHttpRequest();
//otwieramy żadanie
request.open('GET','https://jsonplaceholder.typicode.com/posts/1',true);//true na końcu wskazuje na żądanie asynchroniczne, ale jest to wartość domyślna
//asynchroniczne przetwarzanie 
//kiedy zmieni się status, kiedy serwer coś do nas zwróci
request.onreadystatechange = shwoResponse;//onreadystatechange występuje kilka razy
request.send();

function shwoResponse(){
    //jeśli żądanie zakończono to state = 4
    if(request.readyState === 4){
        if(request.status == 200){
            console.log(request.responseText);
        }else{
            console.log('error');
        }
    }
    
}