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
<?php
//connect to database 
include('mysqli_connect.php');

//get data from form 
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

//set query command - inserts data into users table 
$query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', SHA2('$password', 256))"; 

//connect and run query in database 
$run = mysqli_query($dbc, $query); 

//report success
if ($run){
	echo "
		<header> 
		<img class=\"logo\" alt=\"Exhib_logo\" src=\"small_exhib_logo.png\">
		
		<div class=\"log\">
			<a title=\"Log In\" href=\"index.php\"><i class='bx bx-log-in'></i>&nbsp; &nbsp;Log In</a>	
		</div>
	</header>
	<nav>
		<a  title=\"Home\" href=\"home_nonusers.php\"><i class='bx bxs-home'></i>&nbsp; Home</a>
		<a title=\"Art\" href=\"#\"><i class='bx bx-image'></i>&nbsp;&nbsp;Art</a>
		<a title=\"Artists\" href=\"#\"><i class='bx bxs-group'></i>&nbsp;&nbsp;Artists</a>
		<a title=\"Market\" href=\"#\"><i class='bx bxs-store'></i>&nbsp;&nbsp;Market</a>
	</nav>
	
    <div class=\"logged_out\">
	   <h1>Your account has been created!</h1>
	   <h2>Go Log In!</h2>
    </div>
";
} else {
	//error response 
	echo "There was an error" . mysqli_error($dbc);
	
}

?>