var server = require('http').Server();
var io = require('socket.io')(server);
var Redis = require('ioredis');
var redis = new Redis();
redis.subscribe('test-channel');
redis.on('message',function(channel,message){
    message = JSON.parse(message);
    console.log(channel+':'+message.event);
    //这里是以“频道:事件”的方式去发送，需要接受此事件的client就接受此格式的事件
    //test-channel:SendChat
    io.emit(channel+':'+message.event,message.data);  
});

server.listen(3000);