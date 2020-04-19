<?php
 $generenamef=$_POST['generename'];
  $conn = mysqli_connect("localhost", "root", "", "Spotify");

  if(isset($_POST['add_genere'])){
  	$query="insert into genres(name) values ('$generenamef')";
  	if ($conn->query($query) === TRUE) {
    		echo "New record created successfully";
			} else {
    		echo "Error";
			}
			$conn->close();
       
  ?>
		<script type="text/javascript">
        alert("Genere Added Successfully.");
           window.location.href='addgenere.php';
   		</script>
<?php
  }

?>