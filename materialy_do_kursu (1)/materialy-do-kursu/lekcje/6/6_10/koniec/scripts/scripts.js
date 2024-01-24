var reqUrl = 'https://jsonplaceholder.typicode.com/photos';
var request = new XMLHttpRequest();
request.open('GET', reqUrl);
request.responseType = 'json';
request.send();

request.onload = function() {
	var response = request.response;
	processResponse(response);
}

function processResponse(jsonData) {
	for (var i = 0; i <= 10; i++) {
		console.log(jsonData[i].url);
	}
}