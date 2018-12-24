var io = require('socket.io')(6001)
console.log('Connected to port 6001')
io.on('error',function(socket){
	console.log('error')
})
io.on('connection',function(socket){
	console.log('Co nguoi vua ket noi'+socket.id)
})
var Redis = require('ioredis')
var redis = new Redis(1000)
redis.psubscribe("*",function(error,count){
	//
})
io.on('get-message',function(data){
	// console.log("121313")
})
redis.on('pmessage',function(partner,channel,message){
	message = JSON.parse(message)
	console.log(channel)
	console.log(message)
	console.log(partner)
	
	if (channel == "notification") {
		io.emit(channel+":"+message.event,message.data.notification)
		return console.log('Sent Message <br>')
	}else {
		if (channel == "chat") {
			io.emit(channel+":"+message.event,message.data.message)
			return console.log('Sent Notification')
		}
		return console.log("Troi oi tin duoc khong")
	}	
})