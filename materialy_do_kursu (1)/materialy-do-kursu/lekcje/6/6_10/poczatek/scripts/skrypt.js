//adres na jaki kierujemy żądanie
var reqUrl = 'https://jsonplaceholder.typicode.com/photos';
//samo żądanie
var request = new XMLHttpRequest();
//ustawiamy parametry żądania
request.open('GET',reqUrl);
//ustawiamy typ odpowiedzi
request.responseType = 'json';
//wysyłamy żądanko
request.send();

//przetwarzanie
request.onload = function(){
    var response = request.response;
    processResponse(response);
}

function processResponse(jsonData){
    for(var i = 0; i<=10;i++)
    {
        console.log(jsonData[i].url);

    }
}