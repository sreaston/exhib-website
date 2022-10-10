<?php 
//start session 
session_start();

//check if session is empty 
if(empty($_SESSION['username'])){
	header("Location:index.php");
	
	//terminate the current script
	exit();
}

include('mysqli_connect.php');
?>
<html>
<head>
<title>Exhib-DisplayHome</title>
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

$query = "SELECT * FROM gallery WHERE user = '" . $_SESSION['username'] . "'"; 

$result = mysqli_query($dbc, $query); 

$num = mysqli_num_rows($result); 

if ($result){
	
	//header section 
		echo '<header> 
		<img class="logo" alt="Exhib_logo" src="small_exhib_logo.png">
		
		<div class="log">
			<a title="Log Out" href="handle_form_logout.php"><i class="bx bx-log-out"></i>&nbsp; &nbsp;Log Out</a>	
		</div>
	</header>';
		
	//navigation section 
	echo '<nav>
		<a title="Home" href="home.php"><i class="bx bxs-home"></i>&nbsp; Home</a>
		<a title="Art" href="#"><i class="bx bx-image"></i>&nbsp;&nbsp;Art</a>
		<a title="Artists" href="#"><i class="bx bxs-group"></i>&nbsp;&nbsp;Artists</a>
		<a title="Shop" href="#"><i class="bx bxs-store"></i>&nbsp;&nbsp;Shop</a>
		
		<div class="right-nav">
			<a class="active" title="Portfolio" href="user_MyExhibit.php"><i class="bx bxs-user-circle"></i>&nbsp;&nbsp;My Exhibit</a>
		</div>
	</nav>';
		
	echo '<section id="artist_description">
	<div class="flex_p">
		<div class="bio">
			<img src="elephantsky.png">
		</div>
		<div class="bio">
			<h3>' . $_SESSION['username']. '</h3> 
			<h3>About Me: empty</h3>
			<h3>Art Mediums: empty</h3>
			<h3>Skills: empty</h3>
			<button type="button" formaction="createbio.php">Edit Bio</button>
		</div>
	</div>
</section>';
		
	echo '<section id="portfolio"> 
	<h1>Portfolio
		<a href="uploadpage.php">
		<button class="add"><i class="bx bx-plus"></i></button>
		</a>
	&nbsp;
	</h1>
	<div class="flex_p">';

	
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		
		echo'	<div class="part">
					<img src="images/'.$row['image'].'">
					<div class="info">
						<h4>'.$row['nameofart'].'</h4>
					</div>
				</div>';
		
	}

	echo '</div></section>';
}

?>