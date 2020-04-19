<?php

include("getID3-master/getid3/getid3.php");

$songtitle=$_POST['songtitle'];
$artistidtmp=$_POST['artistid'];
$albumidtmp=$_POST['albumid'];
$genereidtmp=$_POST['genereid'];

$conn = mysqli_connect("localhost", "root", "", "Spotify");
$songtitle=$_POST['songtitle'];
echo "$songtitle";
$genereid=$_POST['genereid'];

 $sql="select id from artists where name = '$artistidtmp'";
 $result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result)){
	$artistsidf =$row['id'];
   }
   $sql1="select id from albums where title = '$albumidtmp'";
 $result1 = mysqli_query($conn,$sql1);
while ($row = mysqli_fetch_assoc($result1)){
	$albumidf =$row['id'];
   }
   $sql2="select id from genres where name = '$genereidtmp'";
 $result2 = mysqli_query($conn,$sql2);
while ($row = mysqli_fetch_assoc($result2)){
	$genereidf =$row['id'];
   }
   $count=0;
$sql="select id from songs where album='$albumidf'";
$result3 = mysqli_query($conn,$sql);
 while ($row = mysqli_fetch_assoc($result3)){
	$count=$count+1;
   }
   $albumOrder=$count+1;

if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio"){
	
	$dir='C:/xampp/htdocs/MusifyOriginal/assets/music/';
	
	$audio_path=$dir.basename($_FILES['audioFile']['name']);

    $type=$_FILES['audioFile']['type'];

    $getID3 = new getID3;
	$ThisFileInfo = $getID3->analyze($audio_path);
	$len= @$ThisFileInfo['playtime_string'];


if(($type=="audio/mp3") || ($type=="audio/wav") ){
	if(move_uploaded_file($_FILES['audioFile']['tmp_name'], $audio_path)) {
		
		$getID3 = new getID3;
		$ThisFileInfo = $getID3->analyze($audio_path);
		$len= @$ThisFileInfo['playtime_string'];
        
        $conn = mysqli_connect("localhost", "root", "", "Spotify");
        $query="insert into songs(title,artist,album,genre,duration,path,albumOrder,plays) values('$songtitle','$artistsidf','$albumidf','$genereidf','$len','$audio_path','$albumOrder','0')";
        
        if ($conn->query($query) === TRUE) {
    		echo "New record created successfully";
			} else {
    		echo "Error";
			}

$conn->close();
       
  ?>
		<script type="text/javascript">
        alert("Uploaded successfully.");
           window.location.href='index.php';
   		</script>
<?php
    	}
   
      }
  
  else{
 ?>
  	<script type="text/javascript">
        alert("!!! Wrong File Format, please select Audio File !!!!.");
           window.location.href='index.php';
    </script>

<?php    
 	 }
  }
?>