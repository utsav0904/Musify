 <?php include("includes/header.php"); ?>

<div class="pageheadingBig">ADD ALBUM</div>

<form action="uploadalbum.php" method="POST" enctype="multipart/form-data">

 <div class="uploadContainer">
 	<div class="inputt">
    <label for="albumtitle" class="songtitle"> Album Title </label>
    <input class="inputtext" id="albumtitle" type="text"  name="albumtitle" placeholder="Enter Album Title"  required />
     </div>
    
    <div class="inputt">
	<label for="artistid" class="songtitle"> Select Artist </label>
  	<select name="artistid" class="selectIteam2" required>
	<option>Select</option>
	<?php    
     $conn = mysqli_connect("localhost", "root", "", "Spotify");
     $sql="SELECT name FROM artists ";
     $result = mysqli_query($conn,$sql);
     
     while ($row = mysqli_fetch_assoc($result)){
    
    echo "<option value='". $row['name'] ."'>" . $row['name'] . "</option>";
        }
	?>    
  	</select>
	</div>
	<div class="inputt">
	<label for="genereid" class="songtitle"> Select Genere </label>
  	<select name="genereid" class="selectIteam2" required>
	<option>Select</option>
	<?php    
     $conn = mysqli_connect("localhost", "root", "", "Spotify");
     $sql="SELECT name FROM genres ";
     $result = mysqli_query($conn,$sql);
     
     while ($row = mysqli_fetch_assoc($result)){
    
    echo "<option value='". $row['name'] ."'>" . $row['name'] . "</option>";
        }
	?>    
  	</select>
	</div>
    
	<div class="chooseDiv">
	
		<input class="inputfile" type="file" name="imageFile" required formnovalidate="imageFile" />
	  
	</div>
	<div class="buttonDiv">
		<input class="button green" type="submit" name="save_image" value="ADD ALBUM" /> 
 	</div>
</div>
</form>


<?php include("includes/footer.php"); ?>
 