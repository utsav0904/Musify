<?php


$conn = mysqli_connect("localhost", "root", "", "Spotify");

$albumtitle=$_POST['albumtitle'];
$artistidtmp=$_POST['artistid'];
$genereidtmp=$_POST['genereid'];


 $sql="select id from artists where name = '$artistidtmp'";
 $result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)){
	$artistsidf =$row['id'];
   }
   $sql2="select id from genres where name = '$genereidtmp'";
 $result2 = mysqli_query($conn,$sql2);
while ($row = mysqli_fetch_assoc($result2)){
	$genereidf =$row['id'];
}
  

if(isset($_POST['save_image']) && $_POST['save_image']=="ADD ALBUM"){
	
	$dir='C:/xampp/htdocs/MusifyOriginal/assets/images/artwork/';
	
	$image_path=$dir.basename($_FILES['imageFile']['name']);

    $type=$_FILES['imageFile']['type'];

if(($type=="image/jpg") || ($type=="image/jpeg")||($type=="image/png") || ($type=="image/psd") ){
	if(move_uploaded_file($_FILES['imageFile']['tmp_name'], $image_path)) {

        
        $conn = mysqli_connect("localhost", "root", "", "Spotify");
        $query="insert into albums(title,artist,genre,artworkPath) values('$albumtitle','$artistsidf','$genereidf','$image_path')";
        
        if ($conn->query($query) === TRUE) {
    		echo "New record created successfully";
			} else {
    		echo "Error";
			}

$conn->close();
       
  ?>
		<script type="text/javascript">
        alert("Album Added successfully.");
           window.location.href='uploadalbum.php';
   		</script>
<?php
    	}
   
      }
  
  else{
 ?>
  	<script type="text/javascript">
        alert("!!! Wrong File Format, please select Image File !!!!.");
           window.location.href='uploadalbum.php';
    </script>

<?php    
 	 }
  }
?>