 <?php include("includes/header.php");?>
<div class="pageheadingBig">ADD ARTIST</div>

<form action="addartistupload.php" method="POST">
	<div class="inputt">
    <label for="songtitle" class="songtitle"> Name of Artist </label>
    <input class="inputtext" id="artistname" type="text"  name="artistname" placeholder="Enter Artist Name"  required />
     </div>

     </div>
	<div class="buttonDiv">
		<input class="button green" type="submit" name="add_artist" value="ADD ARTIST" /> 
 	</div>

</form>
<?php
include("includes/footer.php");?>
 