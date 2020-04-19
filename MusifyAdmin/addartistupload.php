<?php
 $artistnamef=$_POST['artistname'];
  $conn = mysqli_connect("localhost", "root", "", "Spotify");

  if(isset($_POST['add_artist'])){
  	$query="insert into artists(name) values ('$artistnamef')";
  	if ($conn->query($query) === TRUE) {
    		echo "New record created successfully";
			} else {
    		echo "Error";
			}
			$conn->close();
       
  ?>
		<script type="text/javascript">
        alert("Artist Addes Successfully.");
           window.location.href='addartist.php';
   		</script>
<?php
  }

?>