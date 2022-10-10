<?php 
//start session 
session_start();

//check if session is empty 
if(empty($_SESSION['username'])){
	header("Location:index.php");
	
	//terminate the current script
	exit();
}

include("mysqli_connect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Exhib-UploadArt</title>
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
		
		<div class="go_back">
			<a title="Log Out" href="user_MyExhibit.php"><i class='bx bx-arrow-back'></i>&nbsp; &nbsp;Go Back</a>	
		</div>	
		<?php
		echo "<div class=\"username\"> ";
		echo $_SESSION['username'];
		echo"</div>";
		?>
	</header>
	<nav></nav>
	

<div class="upload">
    <form enctype="multipart/form-data" action="upload.php" method="post">
		<fieldset>
			<h3>Create new post<p> </p></h3>
			<div class = "flex_u">
				<i class='bx bxs-image-add'>&nbsp;</i></br></br>
			</div>
			<input class="file" name="userImage" type="file"/></br></br>
				
	
				<label>Name of Art Piece:&nbsp;</label>
				<input name="nameofart" type="text"/></br></br>
			
			<div class="center-btn">
				<button type="submit" name="Upload">Upload</button>
			</div>
		</fieldset>
    </form>
</div>
</body>
</html>