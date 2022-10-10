<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Log in</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exhib</title>
<!-- link to style sheet -->
<link rel="stylesheet" type="text/css" media="screen" href="screen.css">
<!-- link for Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
<!-- Boxicons CDN link -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<header> 
		<img class="logo" alt="Exhib_logo" src="small_exhib_logo.png">
		
		<div class="log">
			<a class="active" title="Log In" href="#"><i class='bx bx-log-in'></i>&nbsp; &nbsp;Log In</a>	
		</div>
	</header>
	<nav>
		<a  title="Home" href="home_nonuser.php"><i class='bx bxs-home'></i>&nbsp; Home</a>
		<a title="Art" href="#"><i class='bx bx-image'></i>&nbsp;&nbsp;Art</a>
		<a title="Artists" href="#"><i class='bx bxs-group'></i>&nbsp;&nbsp;Artists</a>
		<a title="Shop" href="#"><i class='bx bxs-store'></i>&nbsp;&nbsp;Shop</a>
	</nav>
	
<div class="welcome">
	<form action="handle_form_login.php" method="post" accept-charset="UTF-8">
		<fieldset>	
			<h1>Welcome!</h1>
				<div class="inputs">
					<h2>Log In:</h2>
					
					
					<!--Username field-->
					<label>Username:</label><br><input type="text" name="username"><br><br>

					<!--Password field-->
					<label>Password:</label><br><input type="password" name="password"><br>
					
					<!-- Forget Password/Create Account--> 
					<div class="create-new">
						<a title="forget password" href="create_new_password.php">Forget Password?</a><br>
						<a title="New Account" href="create_new_account.php">New Here? Create Account!</a>
					</div>
					
					<!--Submit/log in button -->
					<div class="center-btn">
					<button type="submit" name="login_btn">Log In</button>
						
					</div>
				</div>
		</fieldset>

	</form>
</div>
</body>
</html>
