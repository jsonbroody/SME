
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Login</title>
<link rel="stylesheet" href="css/login.css"/>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="js/login.js"></script>
</head>

<body>
<div id="main">
<h1>SMe Login</h1>
<div>Demo<br/><br/></div>

<div id="login-box">
<form action="" method="post">
<label>Username</label> <input type="text" name="username" class="input" autocomplete="off" id="username"/>
<label>Password </label><input type="password" name="password" class="input" autocomplete="off" id="password"/><br/>
<input type="submit" class="button button-primary" value="Log In" id="login"/> <span class='msg'></span>

<div style="font-size:12px; margin-top:10px" id="error"></div>

</div>
</form>

<div id="register-box">
<form action="" method="post">
<label>Username</label> <input type="text" name="username" class="input" autocomplete="off" id="username"/>
<label>Password </label><input type="password" name="password" class="input" autocomplete="off" id="password"/><br/>
<input type="submit" class="button button-primary" value="Log In" id="login"/> <span class='msg'></span>

<div style="font-size:12px; margin-top:10px" id="error"></div>

</div>
</form>

	<div style="font-size:13px;text-align:center;margin-top:20px">
		1) Try Username: <span style="color:#006699">user</span> and Password: <span style="color:#006699">user</span><br/><br/>
		2) Give wrong password and watch the shake effect.
	</div>
</div>
</body>
</html>
