<?php include("includes/header.php");?>
<div class="pageheadingBig">ADD GENRE</div>

<form action="addgenereupload.php" method="POST">
	<div class="inputt">
    <label for="songtitle" class="songtitle"> Name of Genere </label>
    <input class="inputtext" id="generename" type="text"  name="generename" placeholder="Enter Genere Name"  required />
     </div>

     </div>
	<div class="buttonDiv">
		<input class="button green" type="submit" name="add_artist" value="ADD GENRE" /> 
 	</div>

</form>
<?php
include("includes/footer.php");?>
 