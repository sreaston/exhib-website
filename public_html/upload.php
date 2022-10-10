<?php
//start session 
session_start();

?>
<html>
<head>
<title>Exhib-UploadComplete</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- link to style sheet -->
<link rel="stylesheet" type="text/css" media="screen" href="screen.css">
<!-- link for Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lustria&display=swap" rel="stylesheet">
<!-- Boxicons CDN link -->
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
include('mysqli_connect.php');

//get data from form 
$user = $_SESSION['username'];
$nameofart = $_POST['nameofart'];
$file = $_FILES["userImage"]["name"];

//set query command - inserts data into users table 
$query = "INSERT INTO gallery (image, nameofart, user) VALUES ('$file', '$nameofart', '$user')"; 

//connect and run query in database 
$run = mysqli_query($dbc, $query); 

if ($run){
	//uploads image to images folder in cpanel?
	move_uploaded_file($_FILES['userImage']['tmp_name'], "/home/exhib490/public_html/images/$file");
	
	echo "
		<header> 
		<img class=\"logo\" alt=\"Exhib_logo\" src=\"small_exhib_logo.png\">
		
		<div class=\"log\">
			<a title=\"Log In\" href=\"index.php\"><i class='bx bx-log-in'></i>&nbsp; &nbsp;Log In</a>	
		</div>
	</header>
	<nav>
		<a  title=\"Home\" href=\"home.php\"><i class='bx bxs-home'></i>&nbsp; Home</a>
		<a title=\"Art\" href=\"#\"><i class='bx bx-image'></i>&nbsp;&nbsp;Art</a>
		<a title=\"Artists\" href=\"#\"><i class='bx bxs-group'></i>&nbsp;&nbsp;Artists</a>
		<a title=\"Market\" href=\"#\"><i class='bx bxs-store'></i>&nbsp;&nbsp;Market</a>
		
		<div class=\"right-nav\">
			<a title=\"Portfolio\" href=\"user_MyExhibit.php\"><i class=\"bx bxs-user-circle\"></i>&nbsp;&nbsp;My Exhibit</a>
		</div>
	</nav>";

	
   echo "<div class=\"logged_out\">
	   <h1>Your Image Was successfully added to gallery!</h1>
    </div>
";

} else {
	//error response 
	echo "There was an error" . mysqli_error($dbc);
};
?>