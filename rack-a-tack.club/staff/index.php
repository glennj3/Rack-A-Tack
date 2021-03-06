<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Rack-A-Tack: Staff Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Rack<span>-A-</span>Tack<br>Staff Login</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
		<form method="POST" action="login.php">
			<? if(isset($GET['loginError']))
			{
				?>
				<div class="box-header" style="color:red;">
				<h2 >Invalid Credentials</h2>
			</div>
				<?
			} else
			{
				?>
				<div class="box-header">
				<h2>Log In</h2>
			</div>
				<?
			}?>
			
			<label for="username">Username</label>
			<br/>
			<input type="text" id="username" name="username" required>
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" id="password" required>
			<br/>
			<button type="submit">Sign In</button>
			<br/>
			<a href="#"><p class="small">Forgot your password?</p></a>
			</form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>