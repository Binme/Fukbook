var socket = io('http://localhost:6001')
socket.on('chat:message',function(data){
    console.log(data)
    var user = $("#input-author").val();
    var localTimeLine = "Local";
    if (data.sendTo == localTimeLine) {
    		console.log()
    		var messageTimeLine =	
    		'<article>' +
				'<div class="nofication-reply">' +
					'<div class="nofication-status-info">' +
						'<a href="" class="nofication-status-time">' +
							'<time>2h</time>' +
						'</a>' +
						'<a href="" class="nofication-status-display">' +
							'<div class="nofication-status-display-avatar">' +
								
							'</div>' +
							'<span class="display-name">' +
								'<bdi>' +
									'<strong class="display-name-html">' +
										data.author +
									'</strong>' +
								'</bdi>' +
								'<span class="display-name-account">' +
									'@'+ data.author +
								'</span>' +
							'</span>' +
						'</a>' +
					'</div>' +
					'<div class="nofication-status-content-action">' +
						'<p>' +
							'<span>' +
								'<a href="">' +
							
								'</a>' +
							'</span>&nbsp' +
							data.content +
						'</p>' +
					'</div>' +
					'<div class="nofication-status-action-bar">' +
						'<a href="#" onlick="replyMessage('+data.author+')" class="action-reply">' +
							'<i class="fas fa-reply"></i>' +
							'<span>&nbsp</span>' +
						'</a>' +
						'<a href="" class="action-retweet">' +
							'<i class="fas fa-retweet"></i>' +
						'</a>' +
						'<a href="" class="action-star">' +
							'<i class="fas fa-star"></i>' +
						'</a>' +
						'<a href="" class="action-ellipsis">' +
							'<i class="fas fa-ellipsis-h"></i>' +
						'</a>' +
					'</div>' +
				'</div>' +
			'</article>';
			console.log(messageTimeLine);
			$(".time-line-message").prepend(messageTimeLine);
   	}
    if(data.sendTo == user || data.author == user){
        if($('user-message-detail-name-' + data.sendTo).css("display","block") ||
        	$('user-message-detail-name-' + data.author).css("display","block")){
            var messageRealtime =	
    		'<article>' +
				'<div class="nofication-reply">' +
					'<div class="nofication-status-info">' +
						'<a href="" class="nofication-status-time">' +
							'<time>2h</time>' +
						'</a>' +
						'<a href="" class="nofication-status-display">' +
							'<div class="nofication-status-display-avatar">' +
								
							'</div>' +
							'<span class="display-name">' +
								'<bdi>' +
									'<strong class="display-name-html">' +
										data.author +
									'</strong>' +
								'</bdi>' +
								'<span class="display-name-account">' +
									'@'+ data.author +
								'</span>' +
							'</span>' +
						'</a>' +
					'</div>' +
					'<div class="nofication-status-content-action">' +
						'<p>' +
							'<span>' +
								'<a href="">' +
							
								'</a>' +
							'</span>&nbsp' +
							data.content +
						'</p>' +
					'</div>' +
					'<div class="nofication-status-action-bar">' +
						'<a href="#" onlick="replyMessage('+data.author+')" class="action-reply">' +
							'<i class="fas fa-reply"></i>' +
							'<span>&nbsp</span>' +
						'</a>' +
						'<a href="" class="action-retweet">' +
							'<i class="fas fa-retweet"></i>' +
						'</a>' +
						'<a href="" class="action-star">' +
							'<i class="fas fa-star"></i>' +
						'</a>' +
						'<a href="" class="action-ellipsis">' +
							'<i class="fas fa-ellipsis-h"></i>' +
						'</a>' +
					'</div>' +
				'</div>' +
			'</article>';
			console.log(messageRealtime);
			$(".user-message-feed-detail").append(messageRealtime);
   		}
        return console.log("khong phai cua ban");
    }     
})

socket.on('notification:content',function(data){
	console.log(data)
	var user = $("#input-author").val();;
    if(data.sendTo == user){
		var notification =	
   		'<article>' +
			'<div class="nofication-reply">' +
				'<div class="nofication-status-info">' +
					'<a href="" class="nofication-status-time">' +
						'<time>2h</time>' +
					'</a>' +
					'<a href="" class="nofication-status-display">' +
						'<div class="nofication-status-display-avatar">' +
							
						'</div>' +
						'<span class="display-name">' +
							'<bdi>' +
								'<strong class="display-name-html">' +
									data.author +
								'</strong>' +
							'</bdi>' +
							'<span class="display-name-account">' +
								'@'+ data.author +
							'</span>' +
						'</span>' +
					'</a>' +
				'</div>' +
				'<div class="nofication-status-content-action">' +
					'<p>' +
						'<span>' +
							'<a href="">' +
						
							'</a>' +
						'</span>&nbsp' + '<i class="fas fa-comment" style="color:green"></i> '+
						 ' ' + data.content +
					'</p>' +
				'</div>' +
				'<div class="nofication-status-action-bar">' +
					'<a href="#" onlick="replyMessage("'+data.author+'")" class="action-reply">' +
						'<i class="fas fa-reply"></i>' +
						'<span>&nbsp</span>' +
					'</a>' +
					'<a href="" class="action-retweet">' +
						'<i class="fas fa-retweet"></i>' +
					'</a>' +
					'<a href="" class="action-star">' +
						'<i class="fas fa-star"></i>' +
					'</a>' +
					'<a href="" class="action-ellipsis">' +
						'<i class="fas fa-ellipsis-h"></i>' +
					'</a>' +
				'</div>' +
			'</div>' +
		'</article>';
		console.log(notification);
		$(".notification-all").prepend(notification);
	}		
})