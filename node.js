var express = require('express'),
	app = express(),
	server  = require('http').createServer(app),
	io = require('socket.io')(server);

/* General application code */
var users = [{"email":"test@example.com","name":"Tester Testingon"},{"email":"test2@example.com","name":"Tester Testingon II"},{"email":"test3@example.com","name":"Tester Testingon III Earl of QA"},{"email":"test4@example.com","name":"Newus Guyus IV"}];

// done in this fashion to mitigate callback hell
function removeUser(email) {
	console.log('Someone wants to delete a user...');
	
	// todo: remove user here.
	
	client.emit('users', users);
}

/* HTTP GET handlers */
app.route('/')
   .get(function(req, res){
		res.sendFile('/Library/WebServer/Documents/root.html');
   });
   
app.route('/frontend.js')
   .get(function(req, res){
		res.sendFile('/Library/WebServer/Documents/frontend.js');
   });
   
app.route('/socket.io.js')
   .get(function(req, res){
		res.sendFile('/Library/WebServer/Documents/socket.io.js');
   });
   
app.route('/socket.min.js')
   .get(function(req, res){
		res.sendFile('/Library/WebServer/Documents/socket.min.js');
   });
   
/* Web Socket Handlers */
io.on('connection', function(client) {
	console.log('WebSocket Connection Made!');
	
	client.on('users', function() {
		console.log('Someone wants a list of users...');
		client.emit('users', users);
	});
	
	client.on('removeUser', removeUser);
});

server.listen(3000, function(){});

console.log('Hello from node!');