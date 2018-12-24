<!DOCTYPE html>
<html>
<head>
	<title>SocialNetwork</title>
	<meta name="csrf-token" content="{{ csrf_token() }}"> 
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<link href='/mastodon-icon.ico' rel='icon' type='image/x-icon'>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<div class="main-body">
		<div class="main-row">
			<div class="sys">
				<nav class="taskbar">
					<a href="#" onclick="backGetting()" >
						<div class="taskbar-icon">
							<i class="fas fa-bars"></i>
						</div>
					</a>
					<a href="#" onclick="appearProfile()" >
						<div class="taskbar-icon">
							<i class="fas fa-home"></i>
						</div>
					</a>
					<a href="#">
						<div class="taskbar-icon" onclick="appearMap()">
							<i class="fas fa-globe-americas"></i>
						</div>
					</a>
					<a href="javascript:void(0)" onclick="appearUserMessage()" >
						<div class="taskbar-icon">
							<i class="fas fa-envelope"></i>
						</div>
					</a>
					<a href="{{ url('user/logout') }}">
						<div class="taskbar-icon">
							<i class="fas fa-sign-out-alt"></i>
						</div>
					</a>
				</nav>
				<div class="search">
					<label>
						<input type="text" name="search" placeholder="Search">
					</label>
					<div class="button-search">
						<i class="fas fa-search"></i>
					</div>
				</div>
				<div class="profile">
					<div class="navigation-bar">
						<a href="" onclick="appearProfile()">
							<div class="account-avatar">
							</div>
						</a>
						<div class="navigation-bar-profile">
							<a href="" onclick="appearProfile()">
								<strong id="user-name" value="<?php echo $user->name; ?>">@<?php echo $user->name; ?></strong>
							</a>
							<a href="" onclick="appearProfile()">
								<span>Edit profile</span>
							</a>
						</div>
						<div class="navigation-bar-action">
							<a href="">
								<i class="fas fa-ellipsis-v"></i>
							</a>
						</div>
					</div>
					<form action="{{ url('send-message') }}" method="POST">
					{{csrf_field()}}
					<div class="composer-form">	
						<div class="composer-form-wrapper">
							<div class="composer-form-wrapper-send">
								<input type="hidden" name="author" value="{{$user->name}}" id="input-author">
								<input type="text" name="sendTo" id="input-send" value="">
								<!-- <a href="javascript:void(0)" id="button-send"><i class="fa fa-plus-circle" id="button-send-icon+"></i>
								<i class="fa fa-times-circle" id="button-send-icon-"></i></a> -->
							</div>
							<div class="composer-form-wrapper-textarea">
								<a href="javascript:void(0)" id="button-send"><i class="fa fa-plus-circle" id="button-send-icon+"></i>
								<i class="fa fa-times-circle" id="button-send-icon-"></i></a>
								<textarea placeholder="What's on your mind" name="content" id="input-content" required=""></textarea>
							</div>
						</div>
						<!-- <div class="composer-form-modifier">
							
						</div> -->
						<div class="composer-form-button-wrapper">
							
						</div>
						<div class="composer-form-publish">
							<div class="composer-form-publish-button-wrapper">
								<button type="button" class="button-send-message">
									TOOT!
								</button>
							</div>
						</div>
					</div>
					</form>
					<div class="draw-inner">
						<img src="/elephant.svg">
					</div>
				</div>
			</div>
			<div class="nofication">
				<div class="nofication-header">
					<h1>
						<a href="#">
							<i class="fas fa-bell"></i>
							Nofications
						</a>
					</h1>
					<div class="nofication-header-button">
						<a href="">
							<i class="fas fa-sliders-h"></i>
						</a>
					</div>	
				</div>
				<div class="nofication-scrollable notification-all">
					@foreach ($notifications as $notification)
						<article>
							<div class="nofication-reply">
								<div class="nofication-status-info">
									<a href="" class="nofication-status-time">
										<time>2h</time>
									</a>
									<a href="" class="nofication-status-display">
										<div class="nofication-status-display-avatar">
											
										</div>
										<span class="display-name">
											<bdi>
												<strong class="display-name-html">
													{{$notification->author}}
												</strong>
											</bdi>
											<span class="display-name-account">
												@<?php echo $notification->author; ?>
											</span>
										</span>
									</a>
								</div>
								<div class="nofication-status-content-action">
									<p>
										<span>
											<a href="">
												<!-- @<span>{{$notification->sendTo}}</span> -->
											</a>
										</span>
									@if ($notification->category == "message")	
										<i class="fas fa-comment" style="color: green"></i>
									@endif
									{{$notification->content}}
									</p>
								</div>
								<div class="nofication-status-action-bar">
									<a href="#" class="action-reply" onclick="replyMessage('{{$notification->author}}')">
										<i class="fas fa-reply"></i>
										<span>&nbsp</span>
									</a>
									<a href="" class="action-retweet">
										<i class="fas fa-retweet"></i>
									</a>
									<a href="" class="action-star">
										<i class="fas fa-star"></i>
									</a>
									<a href="" class="action-ellipsis">
										<i class="fas fa-ellipsis-h"></i>
									</a>
								</div>
							</div>
						</article>
					@endforeach
				</div>
			</div>
			<div class="nofication">
				<div class="nofication-header">
					<h1>
						<a href="#">
							<i class="fas fa-users"></i>
							Local timeline
						</a>
					</h1>
					<div class="nofication-header-button">
						<a href="">
							<i class="fas fa-sliders-h"></i>
						</a>
					</div>	
				</div>
				<div class="nofication-scrollable time-line-message">
				@foreach ($messageTimeLines as $messageTimeLine)	
					<article>
						<div class="nofication-reply">
							<div class="nofication-status-info">
								<a href="" class="nofication-status-time">
									<time>2h</time>
								</a>
								<a href="" class="nofication-status-display">
									<div class="nofication-status-display-avatar">
										
									</div>
									<span class="display-name">
										<bdi>
											<strong class="display-name-html">
												{{$messageTimeLine->author}}
											</strong>
										</bdi>
										<span class="display-name-account">
											@ {{$messageTimeLine->author}}
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											<!-- @<span>danesan</span> -->
										</a>
									</span>
									{{$messageTimeLine->content}}
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="javascript:void(0)" onlick="replyMessage({{$messageTimeLine->author}})" class="action-reply" data-name="{{$messageTimeLine->author}}">
									<i class="fas fa-reply"></i>
									<span>&nbsp</span>
								</a>
								<a href="" class="action-retweet">
									<i class="fas fa-retweet"></i>
								</a>
								<a href="" class="action-star">
									<i class="fas fa-star"></i>
								</a>
								<a href="" class="action-ellipsis">
									<i class="fas fa-ellipsis-h"></i>
								</a>
							</div>
						</div>
					</article>
				@endforeach	
				</div>
			</div>
			<div class="start">
				<div class="start-header">
					<h1>
						<a href="#">
							<i class="fas fa-bars"></i>
							Getting started
						</a>
					</h1>
				</div>
				<div class="getting-started">
					<div class="getting-started-wrapper">
						<div class="column-subheading">
							DISCOVER
						</div>
						<a href="javascript:void(0)">
							<i class="fas fa-users"></i>
							Local timeline
						</a>
						<a href="javascript:void(0)" onclick="appearMap()">
							<i class="fas fa-globe-americas"></i>
							Federated timeline
						</a>
						<div class="column-subheading">
							PERSONAL
						</div>
						<a href="javascript:void(0)" onclick="appearUserMessage()">
							<i class="fas fa-envelope"></i>
							Messages
						</a>
						<a href="javascript:void(0)">
							<i class="fas fa-star"></i>
							Favourites
						</a>
						<a href="">
							<i class="fas fa-list-ul"></i>
							Lists
						</a>
					</div>
				</div>
			</div>
			<div class="nofication user-message" style="display: none;">
				<div class="nofication-header">
					<h1>
						<a href="#">
							<i class="fas fa-envelope"></i> 
							Messages
						</a>
					</h1>
					<div class="nofication-header-button">
						<a href="" onclick="backGetting()">
							<i class="fa fa-arrow-left" aria-hidden="true"></i>
						</a>
					</div>	
				</div>
				<div class="nofication-scrollable user-message-feed">

				</div>
			</div>
			<div class="nofication user-message-detail" style="display: none;">
				<div class="nofication-header">
					<h1>
						<a href="#">
							<i class="fas fa-envelope"></i> Messages
						</a>
					</h1>
					<div class="nofication-header-button">
						<a href="#" onclick="appearUserMessage()">
							<i class="fa fa-arrow-left" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="nofication-scrollable user-message-feed-detail">
					
				</div>	
			</div>;
			<div class="nofication profile-user" style="display: none";>
				<div class="nofication-header">
					<h1>
						<a href="#">
							<i class="fas fa-user"></i>
							Profile
						</a>
					</h1>
					<div class="nofication-header-button">
						<a href="" onclick="backGetting()">
							<i class="fa fa-arrow-left" aria-hidden="true"></i>
						</a>
					</div>	
				</div>
				<div class="scrollable">
					<div class="account-timeline-header">
						<div class="account-header">
							<div style="position: relative;">
								<a href="" class="account-header-avatar">
									
								</a>
								<span class="account-header-display-name">
									danesan
								</span>
								<span class="account-header-username">
									@
									danesan
								</span>
								<div class="account-header-button">
									<button>
										<i class="fas fa-edit"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="account-action-bar">
							<a href="#" onclick="appearInfo()" class="account-action-bar-tab">
								<span>Information</span>
								<strong>
									<span>
										^_^
									</span>
								</strong>
							</a>
							<a href="#" onclick="appearFriends()" class="account-action-bar-tab">
								<span>Friends</span>
								<strong>
									<span>
										6
									</span>
								</strong>
							</a>
							<a href="#" class="account-action-bar-tab">
								<span>Media</span>
								<strong>
									<span>
										6
									</span>
								</strong>
							</a>
						</div>
						<div class="account-action-infomation">
							<div>
								<div class="container">
									<div class="input-group mb-3 input-group-sm" style="margin-top: 15px">
									    <div class="input-group-prepend">
									       <span class="input-group-text icon-edit">
									       	<i class="fas fa-signature"></i></span>
									    </div>
									    
									    	<input type="text"
									    	class="form-control input-edit" value="danesan" disabled>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="nofication map-realtime"" style="display: none";>
				<div class="nofication-header">
					<h1>
						<a href="#">
							<i class="fas fa-globe-americas"></i>
							Federated timeline
						</a>
					</h1>
					<div class="nofication-header-button">
						<a href="" onclick="backGetting()">
							<i class="fa fa-arrow-left" aria-hidden="true"></i>
						</a>
					</div>	
				</div>
				<div class="scrollable">
					<div class="account-timeline-header">
						<div id="map">
						</div>
					</div>
				</div> 
			</div>
		</div>	
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.1/socket.io.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>
	<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6lfGBxteO6dODAh_h8kxooHvc3eLdGGo&callback=initMap">
      </script>
	<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/socket.js') }}"></script>
</body>
</html>