let http = require('http');

function onRequest(request, response) {
    let reqUrl = request.url;

    if(reqUrl == '/home') {
        response.writeHead(404, {"Content-Type": "text/html"});
        response.write("<h1>Welcome to the Home Page</h1>");

    } else if (reqUrl == '/getData') {
        let myJson = '{"name":"Jordan Hamblin","class":"CSE 341"}';
        let jsonObj = JSON.parse(myJson);
        let jsonData = JSON.stringify(jsonObj);

        response.writeHead(200, {"Content-Type": "application/json"});      
        response.write(jsonData);

    } else {
        response.writeHead(404, {"Content-Type": "text/html"});
        response.write("<h2>404 Page Not Found</h2>");
    }
    response.end();

}

let server = http.createServer(onRequest);

server.listen(5000);

console.log("The server is now listening on port 5000...");