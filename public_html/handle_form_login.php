<?php
//start session 
session_start();

//connection to database
include('mysqli_connect.php');

//pass login form data
$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
$password = mysqli_real_escape_string($dbc, trim($_POST['password']));

//Formulate the query to check if username and password matches within the database 
$query = "SELECT * from users WHERE username = '$username' AND password = SHA2('$password', 256)";

//run query 
$result = mysqli_query($dbc, $query); 

//if query recieves excatly 1 instance 
if(mysqli_num_rows($result) == 1){
	
	$row = mysqli_fetch_assoc($result); 
			
	//store session data 
	$_SESSION['username'] = $username;
			
	header("Location: home.php");
}
else {
			
	//direct user back to login page 
	header("Location: index.php");
			
	//end the current script 
	exit();	
}

?>