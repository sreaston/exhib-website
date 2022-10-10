<?php
//start session 
session_start();

//unset session 
$_SESSION['username'] = "";

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Logged Out</title>
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
			<a title="Log In" href="index.php"><i class='bx bx-log-in'></i>&nbsp; &nbsp;Log In</a>	
		</div>
	</header>
	<nav>
		<a  title="Home" href="home_nonuser.php"><i class='bx bxs-home'></i>&nbsp; Home</a>
		<a title="Art" href="#"><i class='bx bx-image'></i>&nbsp;&nbsp;Art</a>
		<a title="Artists" href="#"><i class='bx bxs-group'></i>&nbsp;&nbsp;Artists</a>
		<a title="Market" href="#"><i class='bx bxs-store'></i>&nbsp;&nbsp;Market</a>
	</nav>
	
<div class="logged_out">
	<h1>You are now logged out.</h1>
</div>
</body>
</html>