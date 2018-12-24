history.pushState(null, null, location.href);
window.onpopstate = function () {
    history.go(1);
    // alert("Sorry, you logined")
};
$(".gm-control-active").click(function(){
	window.onpopstate() = null;
});
$( document ).ready(function(){
	var inputSend = document.getElementById("input-send");
	var iconSendAdd = document.getElementById("button-send-icon+");
	var iconSendRemove = document.getElementById("button-send-icon-");

	iconSendAdd.onclick = function(){
		event.preventDefault();
		// alert("da thanh cong");
		var animateDiv = $(".composer-form-wrapper-send")
		.css({"display":"block","height":"0px"});
		animateDiv.animate({height: '25px'}, "slow");
		var animateInput = 
		$("#input-send").css({"display":"inline-block","width":"0%"});
		animateInput.animate({width: '100%'}, "slow");
		inputSend.select();
		iconSendAdd.style.display = "none";
		iconSendRemove.style.display = "block";
	}
	iconSendRemove.onclick = function(){
		event.preventDefault();
		// alert("da thanh cong");
		var animateDiv = $(".composer-form-wrapper-send")
		.css({"display":"block","height":"25px"});
		animateDiv.hide("slow");
		var animateInput = 
		$("#input-send").css({"display":"inline-block","width":"100%"});
		animateInput.animate({width: '0%',height: '0px'}, "slow").hide("slow");
		iconSendAdd.style.display = "block";
		iconSendRemove.style.display = "none";
	}
});

function appearFriends(){
	event.preventDefault();
	var friends = 
	'<div class="account-action-friend">' +
		'<article>' +
			'<div class="account-friend">' +
				'<div class="account-friend-wrapper">' +
					'<a href="">' +
						'<div class="account-friend-avatar-wrapper">' +
							'<div class="account-friend-avatar-wrapper-avatar">' +
							
							'</div>' +
						'</div>' +
						'<span class="account-friend-name">' +
							'<strong>' +
								'Macroeon' +
							'</strong>' +
							'<span>' +
								'@Macroneon@pawoo.net' +
							'</span>' +
						'</span>' +
					'</a>' +
					'<div class="account-relationship">' +
						'<button>' +
							'<i class="fas fa-user-plus"></i>' +
						'</button>' +
					'</div>' +
				'</div>' +
			'</div>' +
		'</article>' +
	'</div>';
	$(".account-action-friend").remove();
	$(".account-action-infomation").remove();
	$(".account-timeline-header").append(friends);
}

function appearMap(){
	event.preventDefault();
	$(".user-message").css("display","none");
	$(".user-message-detail").css("display","none");
	$(".profile-user").css("display","none");
	$(".start").css("display","none");
	$(".map-realtime").css("display","block");
}

function appearInfo(){
	event.preventDefault();
	var info = 
	'<div class="account-action-infomation">' +
		'<div>' +
			'<table>' +
				'<tr>' +
			    	'<td>Name:</td>' +
			    	'<td>Danesan</td>' +
			  	'</tr>' +
			  	'<tr>' +
			    	'<td>Gender:</td>' +
			    	'<td>Male</td>' +
			  	'</tr>' +
			  	'<tr>' +
			    	'<td>Date:</td>' +
			    	'<td>13/12/1999</td>' +
			  	'</tr>' +
			  	'<tr>' +
			    	'<td>Address:</td>' +
			    	'<td>66 Nguyen Van Linh street, ' +
			    	'Da Nang,Viet Nam</td>' +
			  	'</tr>' +
			  	'<tr>' +
			    	'<td style="border-bottom: none;">Phone:</td>' +
			    	'<td style="border-bottom: none;">+84905682298</td>' +
			  	'</tr>' +
			'</table>' +
		'</div>' +
	'</div>';	
	$(".account-action-friend").remove();
	$(".account-action-infomation").remove();
	$(".account-timeline-header").append(info);
}

function appearProfile(){
	event.preventDefault();
	$(".user-message").css("display","none");
	$(".user-message-detail").css("display","none");
	$(".start").css("display","none");
	$(".map-realtime").css("display","none");
	$(".profile-user").css("display","block");
}

function replyMessage(data) {
	event.preventDefault();
	// remove: replyMessage(data);
	if ($("#button-send-icon+").css("display","none")) {
		var inputSend = document.getElementById("input-send");
		var inputContent = document.getElementById("input-content");
		var iconSendAdd = document.getElementById("button-send-icon+");
		var iconSendRemove = document.getElementById("button-send-icon-");

		var animateDiv = $(".composer-form-wrapper-send")
		.css({"display":"block","height":"0px"});
		animateDiv.animate({height: '25px'}, "slow");
		var animateInput = 
		$("#input-send").css({"display":"inline-block","width":"0%"});
		animateInput.animate({width: '100%'}, "slow");
		inputSend.value = data;
		inputContent.select();
		iconSendAdd.style.display = "none";
		iconSendRemove.style.display = "block";
		return appearMessage(data);
	}
	if ($("#button-send-icon+").css("display","inline-block")) { 
		$("#input-send").val(data);
		return appearMessage(data);
	}
}

function appearUserMessage() {
	event.preventDefault();
	var userName = $("#input-author").val();
	$.ajax({
		type: 'get',
		dataType: 'html',
		url: 'http://localhost:8000/message/getUserMessage',
		data: "data=" +userName,
		success: function (data) {
			var message = "";
			var data = jQuery.parseJSON(data);
			data.forEach(function(data){
	 		if (data.author === userName) {
				
			} else {
				message +=	'<article onclick=appearMessage("'+data.author+'")>' +
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
											// '@<span>'+ data.sendTo +'</span>' +
										'</a>' +
									'</span>&nbsp' +
									// data.content +
								'</p>' +
							'</div>' +
							'<div class="nofication-status-action-bar">' +
								'<a href="#" '+data.sendTo+' class="action-reply">' +
									'<i class="fas fa-reply"></i>' +
									'<span>&nbsp</span>' +
								'</a>' +
							'</div>' +
						'</div>' +
					'</article>' ;
				}
				});	
			$(".user-message-detail").css("display","none");
			$(".start").css("display","none");
			$(".map-realtime").css("display","none");
			$(".user-message").css("display","block");
			$(".user-message-feed").html(message);
		}	
	});	
}

function appearMessage(sendTo){
	event.preventDefault();
	var userName = $("#input-author").val();
	var sendToName = sendTo;
	$.ajax({
		type: 'get',
		dataType: 'html',
		url: 'http://localhost:8000/message/getMessageByName',
		data: "author=" + sendToName + "&sendTo=" + userName,
		success: function (data) {
			var message = "";
			var data = jQuery.parseJSON(data);
			// var dayNow = new Date();
			// console.log(dayNow);
			// var dayBefore = data[0].created_at;
			// // console.log(dayBefore); 
			// var dayBefore = new Date("dayBefore");
			// console.log(dayBefore);
			// var diff = Math.abs(dayNow-dayBefore);
			// console.log(diff); 
			data.forEach(function(data){
	 		// var data.author = data.author.trim();
			message +=	'<article>' +
					'<div class="nofication-reply">' +
						'<div class="nofication-status-info">' +
							'<a href="" class="nofication-status-time">' +
								// '<time>' + diff + 'h</time>' +
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
										// '@<span>'+ data.sendTo +'</span>' +
									'</a>' +
								'</span>&nbsp' +
								data.content +
							'</p>' +
						'</div>' +
						'<div class="nofication-status-action-bar">' +
							'<a href="#" class="action-reply">' +
								'<input type="hidden" value="'+data.author+'">' +
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
				'</article>' ;
			});
			
			$(".start").css("display","none");
			$(".user-message").css("display","none");
			$(".map-realtime").css("display","none");
			$(".user-message-detail").css("display","block");
			var userMessageDetailName = "user-message-detail-name-" + sendTo;
			$(".user-message-detail").addClass(userMessageDetailName);
			$(".user-message-feed-detail").html(message);
			
			$(".action-reply").click(function(){
				var data = $(this).find("input").val();
				if (data == userName) {
					return; 
				} else	{
					appearMessage(data);
					if ($("#button-send-icon+").css("display","none")) {
						var inputSend = document.getElementById("input-send");
						var inputContent = document.getElementById("input-content");
						var iconSendAdd = document.getElementById("button-send-icon+");
						var iconSendRemove = document.getElementById("button-send-icon-");

						inputSend.style.display = "inline-block";
						inputSend.value = data;
						inputContent.select();
						iconSendAdd.style.display = "none";
						iconSendRemove.style.display = "block";
					}
					return $("#input-send").val(data);
				}	
			})
		}
	});	
};
function backGetting(){
	event.preventDefault();
	$(".user-message").css("display","none");
	$(".user-message-detail").css("display","none");
	$(".profile-user").css("display","none");
	$(".map-realtime").css("display","none");
	$(".start").css("display","block");
};

$( ".button-send-message" ).click(function() {
	var author = $("#input-author").val();
	var sendTo = $("#input-send").val();
	if (sendTo == "") {
		sendTo = "Local";
	};
	var locker = $("#input-content").val();
	console.log("Sending");
	$.ajax ({
		headers: {
	    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		type: 'post',
		dataType: 'html',
		url: 'http://localhost:8000/message/send-message',
		data : "author=" + author + "&sendTo=" + sendTo + "&content=" + locker,
		success: function (data) {
			console.log("Sent");
			$("#input-content").val('');
		}
	})
})

var map;

/**
 * @param {String} status Include: normal and alert
 * @param {Integer} radius Radius ripple
 */
function rippleEffect(status, radius) {
  let url = './assets/icons/ripple.svg';

  if (status === 'alert') {
    url = './assets/icons/ripple-red.svg';
  }

  var iconRipples = {
    statusRed: {
      name: 'statusRed',
      url: url,
      scaledSize: new google
        .maps
        .Size(radius, radius),
      origin: new google
        .maps
        .Point(0, 0),
      anchor: new google
        .maps
        .Point(radius / 2, radius / 2)
    },
    statusYellow: {
      name: 'statusYellow',
      url: url,
      scaledSize: new google
        .maps
        .Size(radius, radius),
      origin: new google
        .maps
        .Point(0, 0),
      anchor: new google
        .maps
        .Point(radius / 2, radius / 2)
    },
    statusGreen: {
      name: 'statusGreen',
      url: url,
      scaledSize: new google
        .maps
        .Size(radius, radius),
      origin: new google
        .maps
        .Point(0, 0),
      anchor: new google
        .maps
        .Point(radius / 2, radius / 2)
    }
  };

  return iconRipples;
}


/**
 * Func create new marker in map with position
 * @param {Position} position 
 * @param {Icon} icon 
 * @param {Map} map 
 * @param {String} title 
 */

function createMarker(position, icon, map, title, message) {
  var marker = new google
  .maps
  .Marker({
    position: position,
    icon: icon,
    map: map,
    title: title,
    optimized: false
  });

  var infoWindow_1 = new google.maps.InfoWindow({
    content: '<i class="fas fa-file-signature" style="color:blue"></i>&nbsp&nbsp'+ message.gatewayId + '<br><br><i class="fas fa-map-marked-alt" style="color:red"></i>&nbsp&nbsp'
    + message.lat + '&nbsp&nbsp(lat)<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'  + message.lng +
    '&nbsp&nbsp(lng)<br><br><i class="fas fa-fist-raised" style="color:green"></i>&nbsp&nbsp&nbsp&nbsp' +message.force 
  });

  google.maps.event.addListener(marker, 'click', function() { 
    infoWindow_1.open(map, marker);
  }); 

  return marker;  
}


var mapCenter = {
  lat: 15.987012,
  lng: 108.324270
};

function initMap() {
  map = new google
    .maps
    .Map(document.getElementById('map'), {
      zoom: 11,
      center: new google
        .maps
        .LatLng(15.987012, 108.324270),
        mapTypeId: 'hybrid',
        // scrollwheel: true,
        // mapTypeControl: true,
        // mapTypeControlOptions: {
        //     style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        //     position: google.maps.ControlPosition.LEFT_TOP
        // },
        zoomControl: true,
        zoomControlOptions: {
          style: google.maps.ZoomControlStyle.SMALL,
          position: google.maps.ControlPosition.LEFT_CENTER
        }
    });

  var icons = {
    statusRed: {
      name: 'statusRed',
      url: './assets/icons/lifebuoy-red.svg', // url
      scaledSize: new google
        .maps
        .Size(20, 20), // scaled size
      origin: new google
        .maps
        .Point(0, 0), // origin
      anchor: new google
        .maps
        .Point(10, 10) // anchor
    },
    statusYellow: {
      name: 'statusYellow',
      url: './assets/icons/lifebuoy-yellow.svg',
      scaledSize: new google
        .maps
        .Size(20, 20),
      origin: new google
        .maps
        .Point(0, 0),
      anchor: new google
        .maps
        .Point(10, 10)
    },
    statusGreen: {
      name: 'statusGreen',
      url: './assets/icons/lifebuoy-green.svg',
      scaledSize: new google
        .maps
        .Size(20, 20),
      origin: new google
        .maps
        .Point(0, 0),
      anchor: new google
        .maps
        .Point(10, 10)
    }
  };
  
  // console.log(firebaseRef);

  var arrNodeLifeBuoy = [];
  // List data from server
  var arrNodeLifeBuoy = [
    {
      lat: 16.064186,
      lng: 108.257377,
      gatewayId: 'gateway001',
      force: 20,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 16.102878,
      lng: 108.318747,
      gatewayId: 'gateway002',
      force: 20,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 15.998564,
      lng: 108.282701,
      gatewayId: 'gateway003',
      force: 17,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 15.945672,
      lng: 108.349546,
      gatewayId: 'gateway004',
      force: 24,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 15.999849,
      lng: 108.404272,
      gatewayId: 'gateway005',
      force: 55,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 16.075236,
      lng: 108.399794,
      gatewayId: 'gateway006',
      force: 90,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 15.991977,
      lng: 108.466355,
      gatewayId: 'gateway007',
      force: 15,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 16.035485,
      lng: 108.345183,
      gatewayId: 'gateway008',
      force: 60,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 15.903421,
      lng: 108.446749,
      gatewayId: 'gateway009',
      force: 38,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 15.992898,
      lng: 108.345809,
      gatewayId: 'gateway010',
      force: 40,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
    {
      lat: 16.048386,
      lng: 108.295030,
      gatewayId: 'gateway011',
      force: 36,
      gyroscope: {
        x: 200,
        y: 400,
        z: 500
      }
    },
  ]

  // Handle update status with force
  arrNodeLifeBuoy.forEach(function(item) {
    item.position = new google.maps.LatLng(item.lat, item.lng);
    if (item.force > 0 && item.force < 30) {
      item.type = 'statusGreen';
    } else if (item.force < 50) {
      item.type = 'statusYellow';
    } else {
      item.type = 'statusRed';
    }
  });

  // Define the LatLng coordinates for the polygon's path.
  var triangleCoords = [
    {
      lat: 16.061281,
      lng: 108.285432
    }, {
      lat: 15.998564,
      lng: 108.282701
    }, {
      lat: 15.999849,
      lng: 108.404272
    }, {
      lat: 15.991977,
      lng: 108.466355
    }
  ];

  // Construct the polygon.
  var bermudaTriangle = new google
    .maps
    .Polygon({
      paths: triangleCoords,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 2,
      fillColor: '#FF0000',
      fillOpacity: 0.35
    });
  // bermudaTriangle.setMap(map);

  // Create polyline
  var flightPlanCoordinates = [
    {
      lat: 16.061281,
      lng: 108.285432
    }, 
    // {
    //   lat: 16.102878,
    //   lng: 108.318747
    // }, {
    //   lat: 16.102878,
    //   lng: 108.349546
    // }, {
    //   lat: 15.999849,
    //   lng: 108.404272
    // }
  ];

  // var flightPath = new google
  //   .maps
  //   .Polyline({path: flightPlanCoordinates, geodesic: true, strokeColor: '#FF0000', strokeOpacity: 1.0, strokeWeight: 2});

  var flightPath = new google
    .maps
    .Polyline({path: flightPlanCoordinates, geodesic: true, strokeColor: '#FF0000', strokeOpacity: 1.0, strokeWeight: 2});

  //Create markers.
  // flightPath.setMap(map); 

  // var result = arrNodeLifeBuoy;
  // result.forEach(function (feature) {
  //   this.createMarker(feature.position, icons[feature.type], map, 'marker', feature);
  //   this.createMarker(feature.position, rippleEffect('alert', 60)[feature.type], map, 'markerEffect', feature);
  // });

}				