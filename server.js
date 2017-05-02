var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);
var redis = require('redis');
 
server.listen(8890);
console.log('Server is listening on :: 8890');
io.on('connection', function (socket) {
 
  console.log("new client connected");
  var redisClient = redis.createClient();
  redisClient.subscribe('NotifyCook');
  redisClient.subscribe('NotifyWaiter');
  //redisClient.subscribe('notifyWaiter');
 
  redisClient.on("message", function(channel, message) {
    console.log("Notification for cook :: "+ message + "channel" + channel);
    socket.emit(channel, message);
  });

  //redisClient.on("notifyWaiter", function(channel, message) {
  //  console.log("Notification for waiter :: "+ message + "channel");
  //  socket.emit(channel, message);
  //});
 
  socket.on('disconnect', function() {
    redisClient.quit();
  });
 
});