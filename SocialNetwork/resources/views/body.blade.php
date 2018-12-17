<!DOCTYPE html>
<html>
<head>
	<title>book</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
	<link href='/mastodon-icon.ico' rel='icon' type='image/x-icon'>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
	<div class="main-body">
		<div class="main-row">
			<div class="sys">
				<nav class="taskbar">
					<a href="">
						<div class="taskbar-icon">
							<i class="fas fa-bars"></i>
						</div>
					</a>
					<a href="">
						<div class="taskbar-icon">
							<i class="fas fa-home"></i>
						</div>
					</a>
					<a href="">
						<div class="taskbar-icon">
							<i class="fas fa-globe-americas"></i>
						</div>
					</a>
					<a href="">
						<div class="taskbar-icon">
							<i class="fas fa-map-marked-alt"></i>
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
						<a href="">
							<div class="account-avatar">
							</div>
						</a>
						<div class="navigation-bar-profile">
							<a href="">
								<strong>@ {{$user->name}}</strong>
							</a>
							<a href="">
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
								<input type="hidden" name="author" value="{{$user->name}}">
								<input type="text" name="sendTo" id="input-send">
								<a href="" id="button-send"><i class="fa fa-plus-circle" id="button-send-icon+"></i>
								<i class="fa fa-times-circle" id="button-send-icon-"></i></a>
							</div>
							<div class="composer-form-wrapper-textarea">
								<textarea placeholder="What's on your mind" name="content"></textarea>
							</div>
						</div>
						<!-- <div class="composer-form-modifier">
							
						</div> -->
						<div class="composer-form-button-wrapper">
							
						</div>
						<div class="composer-form-publish">
							<div class="composer-form-publish-button-wrapper">
								<button type="submit">
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
				<div class="nofication-scrollable">
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
				<div class="nofication-scrollable">
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
				</div>
			</div>
			<!-- <div class="start">
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
						<a href="">
							<i class="fas fa-users"></i>
							Local timeline
						</a>
						<a href="">
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
						<a href="">
							<i class="fas fa-star"></i>
							Favourites
						</a>
						<a href="">
							<i class="fas fa-list-ul"></i>
							Lists
						</a>
					</div>
				</div>
			</div> -->
			<div class="nofication">
				<div class="nofication-header">
					<h1>
						<a href="#">
							<i class="fas fa-user"></i>
							Profile
						</a>
					</h1>
					<div class="nofication-header-button">
						<a href="">
							<i class="fas fa-sliders-h"></i>
						</a>
					</div>	
				</div>
				<div class="nofication-scrollable">
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
												Joeri Evers
											</strong>
										</bdi>
										<span class="display-name-account">
											@joeri_poeri
										</span>
									</span>
								</a>
							</div>
							<div class="nofication-status-content-action">
								<p>
									<span>
										<a href="">
											@<span>danesan</span>
										</a>
									</span>
									asdasd
								</p>
							</div>
							<div class="nofication-status-action-bar">
								<a href="" class="action-reply">
									<i class="fas fa-reply"></i>
									<span>0</span>
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
					
				</div>
			</div>
		</div>	
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.1/socket.io.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
	<script type="text/javascript">

		function appearUserMessage() {
			event.preventDefault();
			var userName = '<?php echo $user->name ?>';
			$.ajax({
				type: 'get',
				dataType: 'html',
				url: '<?php echo url('/message/getUserMessage') ?>',
				data: "data=" +userName,
				success: function (data) {
					console.log(data);
					var message = "";
					var data = jQuery.parseJSON(data);
					
					data.forEach(function(data){
			 	
					message +=	'<article onclick=appearMessage("' + data.sendTo + '")>' +
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
													data.sendTo +
												'</strong>' +
											'</bdi>' +
											'<span class="display-name-account">' +
												'@'+ data.sendTo +
											'</span>' +
										'</span>' +
									'</a>' +
								'</div>' +
								'<div class="nofication-status-content-action">' +
									'<p>' +
										'<span>' +
											'<a href="">' +
												'@<span>'+ userName +'</span>' +
											'</a>' +
										'</span>&nbsp' +
										// data.content +
									'</p>' +
								'</div>' +
							'</div>' +
						'</article>' ;
					});
					
					var appearMessage = 
					'<div class="nofication notification-message">' +
						'<div class="nofication-header">' +
							'<h1>' +
								'<a href="#">' +
									'<i class="fas fa-envelope"></i> Messages' +
								'</a>' +
							'</h1>' +
							'<div class="nofication-header-button">' +
								'<a href="#" onclick="backGetting()">' +
									'<i class="fa fa-arrow-left" aria-hidden="true"></i>' +
								'</a>' +
							'</div>' +
						'</div>' +
						'<div class="nofication-scrollable">' +
							message +
						'</div>' +	
					'</div>';
					console.log(appearMessage);
					$(".notification-message").remove();
					$(".start").remove();
					$(".main-row").append(appearMessage);
				}	
			});	
		}

		function appearMessage(sendTo){
			event.preventDefault();
			var userName = '<?php echo $user->name ?>';
			var sendToName = sendTo;
			$.ajax({
				type: 'get',
				dataType: 'html',
				url: '<?php echo url('/message/getMessageByName') ?>',
				data: "sendTo=" + sendToName + "&author=" + userName,
				success: function (data) {
					console.log(data);
					var message = "";
					var data = jQuery.parseJSON(data);
					
					data.forEach(function(data){
			 	
					message +=	'<article>' +
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
												'@<span>'+ data.sendTo +'</span>' +
											'</a>' +
										'</span>&nbsp' +
										data.content +
									'</p>' +
								'</div>' +
								'<div class="nofication-status-action-bar">' +
									'<a href="" class="action-reply">' +
										'<i class="fas fa-reply"></i>' +
										'<span> 0</span>' +
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
					
					var appearMessage = 
					'<div class="nofication notification-message">' +
						'<div class="nofication-header">' +
							'<h1>' +
								'<a href="#">' +
									'<i class="fas fa-envelope"></i> Messages' +
								'</a>' +
							'</h1>' +
							'<div class="nofication-header-button">' +
								'<a href="#" onclick="appearUserMessage()">' +
									'<i class="fa fa-arrow-left" aria-hidden="true"></i>' +
								'</a>' +
							'</div>' +
						'</div>' +
						'<div class="nofication-scrollable">' +
							message +
						'</div>' +	
					'</div>';
					console.log(appearMessage);
					$(".notification-message").remove();
					$(".main-row").fadeIn().append(appearMessage);
				}
			});	
		};
		function backGetting(){
			event.preventDefault();
			var appearGetting = 
			'<div class="start">' +
				'<div class="start-header">' +
					'<h1>' +
						'<a href="#">' +
							'<i class="fas fa-bars"></i>' +
							' Getting started' +
						'</a>' +
					'</h1>' +
				'</div>' +
				'<div class="getting-started">' +
					'<div class="getting-started-wrapper">' +
						'<div class="column-subheading">' +
							' DISCOVER' +
						'</div>' +
						'<a href="">' +
							'<i class="fas fa-users"></i>' +
							' Local timeline' +
						'</a>' +
						'<a href="">' +
							'<i class="fas fa-globe-americas"></i>' +
							' Federated timeline' +
						'</a>' +
						'<div class="column-subheading">' +
							' PERSONAL' +
						'</div>' +
						'<a href="javascript:void(0)" onclick="appearUserMessage()">' +
							'<i class="fas fa-envelope"></i>' +
							' Messages' +
						'</a>' +
						'<a href="">' +
							'<i class="fas fa-star"></i>' +
							' Favourites' +
						'</a>' +
						'<a href="">' +
							'<i class="fas fa-list-ul"></i>' +
							' Lists' +
						'</a>' +
					'</div>' +
				'</div>' +
			'</div>';
			// $(".notification-message").fadeOut();
			$(".notification-message").remove();
			$(".main-row").append(appearGetting);
		};

		var socket = io('http://localhost:6001')
		socket.on('chat:message',function(data){
		    console.log(data)
		    var user = '<?php echo $user->name ?>';
		    if(data.sendTo == user){
		        if($('#'+data.id).length == 0){
		            // $('#data').append('<p><strong>'+data.author+'</strong>: '+data.content+'</p>')
		        }
		        else{
		            console.log('Đã có tin nhắn')
		        }
		    }else{
		        console.log("khong phai Malaysia")
		    }     
		})
	</script>
</body>
</html>