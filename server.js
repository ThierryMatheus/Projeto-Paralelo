var app = require('express')();
var http = require('http').createServer(app);
var io = require('socket.io')(http);

const players = {}

app.get('/', function(req, res){
  res.sendFile(__dirname + '/adedonha.html');
});

io.on('connection', function(socket){
	players[socket.id] = {
		nome:'Nome',
		points: 0,
	}
  console.log(socket.id +' connected');
  socket.on('disconnect', function(){
    console.log('user disconnected');
  })
// socket.on('nome', name => {
//	players[socket.id].nome = name;
//	console.log(name);
//  })
	socket.broadcast.emit('hi');
});
http.listen(3000, function(){
  console.log('listening on *:3000');
});

