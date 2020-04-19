<?php  
include("includes/header.php");
include("includes/classes/User.php");

?>

<div class="entityInfo">

	<div class="centerSection">
		<div class="userInfo">
			<h1><?php echo $userLoggedIn->getFirstAndLastName(); ?></h1>
		</div>
	</div>

	<div class="buttonItems">
		<button class="button" onclick="logout()">LOGOUT</button>
	</div>


</div>
<?php  
include("includes/footer.php");
?>
