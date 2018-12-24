<!DOCTYPE html>
<html>
<head>
	<title>book</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='/mastodon-icon.ico' rel='icon' type='image/x-icon'>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>
	<div class="main">
		<div class="col-md-4 login">
			<img src="mastodon-pic.svg" height="50" width="150">
			@if(count($errors)>0)
				  	<div class="alert alert-danger">
				  		@foreach($errors->all() as $err)
				  			{{$err}}<br>
				  		@endforeach
				  	</div>
			@endif
			@if(Session::has('flash_message'))
                    <div class="alert alert-danger" style="margin-top: 30px">
                        {!! Session::get('flash_message') !!}
                    </div>
            @endif
			<form method="POST" action="{{ url('user/login') }}">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="login-form">
					<div class="row">
						<label>E-mail address</label>
					</div>
					<div class="row">
						<input type="email" name="Email" required>
					</div>
					<div class="row">
						<label>Password</label>
					</div>
					<div class="row">
						<input type="password" name="Password" required>
					</div>
					<div class="row">
						<button type="submit">LOG IN</button>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="text-footer">
					<a href="">Sign up</a>&nbsp&nbsp&nbsp
					<a href="">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>