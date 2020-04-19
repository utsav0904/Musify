<?php
include("includes/config.php");

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else{
	header("Location: register.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"></li>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
	<div id="mainContainer">
		<div id="navBarContainer">
			<nav class="navBar">
				
				<a href="index.php" class="logo">
					<img src="assets/images/icons/logo.png">
					</a>

					<div class="group">
						<div class="navIteam">
							<a href="index.php" class="navIteamLink">Add Songs</a>
						</div>
						<div class="navIteam">
							<a href="addartist.php" class="navIteamLink">Add Artists</a>
						</div>
						<div class="navIteam">
							<a href="addgenere.php" class="navIteamLink">Add Genere</a>
						</div>
						<div class="navIteam">
							<a href="addalbum.php" class="navIteamLink">Add Album</a>
						</div> 
						<div class="navIteam">
							<a href="reports.php" class="navIteamLink">Reports</a>
						</div>

						
						<div class="groupadmin">
							<div class="navIteam">
							<a href="profile.php" class="navIteamLinkAdmin">Admin(LOGOUT)</a> 
						</div>
						
					</div>
			</nav>
			
			</div>
			<div id="mainViewContainer">
				<div id="mainContent">