 <?php include("includes/header.php");?>
<div class="pageheadingBig">ADD SONGS</div>

<form action="upload.php" method="POST" enctype="multipart/form-data">

 <div class="uploadContainer">
 	<div class="inputt">
    <label for="songtitle" class="songtitle"> Song Title </label>
    <input class="inputtext" id="songtitle" type="text"  name="songtitle" placeholder="Enter Song Title"  required />
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
	<label for="albumid" class="songtitle"> Select Album </label>
  	<select name="albumid" class="selectIteam2">
	<option>Select</option>
	<?php    
     $conn = mysqli_connect("localhost", "root", "", "Spotify");
     $sql="SELECT title FROM albums ";
     $result = mysqli_query($conn,$sql);
     
     while ($row = mysqli_fetch_assoc($result)){
    
    echo "<option value='". $row['title'] ."'>" . $row['title'] . "</option>";
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
	
		<input class="inputfile" type="file" name="audioFile" required formnovalidate="Audio" />
	  
	</div>
	<div class="buttonDiv">
		<input class="button green" type="submit" name="save_audio" value="Upload Audio" /> 
 	</div>
</div>
</form>


<?php include("includes/footer.php"); ?>
 