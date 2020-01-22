var app = require('express')();
var http = require('http').createServer(app);
var io = require('socket.io')(http);

const Players = {}




app.get('/', function(req, res){
  res.sendFile(__dirname + '/adedonha.html');
});


io.on('connection', function(socket){
	Players[socket.id] = {
		nome:"Thierry",
		points:0
	}
	socket.on('nome',name=>{
		Players[socket.id].nome=name;
		})

	console.log(socket.id +' connected');


  socket.on('disconnect', function(data){
    delete Players[socket.id]
    socket.broadcast.emit('Players',Players)
    console.log('user disconnected');
  })
    socket.broadcast.emit('Players',Players)

// socket.on('nome', name => {
//	Players[socket.id].nome = name;
//	console.log(name);
//  })
//	socket.broadcast.emit('hi');
});
	http.listen(3000, function(){
	console.log('listening on *:3000');
})
