 <?php include("includes/header.php"); ?>

<div class="pageheadingBig">REPORTS</div>
   <div class="wrapper">
  	<div class="data">
  		<form method="GET" action="reports.php">
  		<select name="songs" class="selectIteam">
  			<option>Select</option>
  			<option>Most Played Songs</option>
        <option>User Registration</option>
  	  </select>
  		
      <input type="submit" name="submit" class="button green"/>
  		
<table class="table" border="1">
<?php
$conn = mysqli_connect("localhost", "root", "", "Spotify");
if(isset($_GET['songs']) && !empty($_GET['songs'])){  
  $songs=$_GET['songs'];

  if($songs=="Most Played Songs") 
  {
      $sql = "SELECT title, plays FROM songs order by plays desc" ;
      $result = $conn->query($sql);
       if($result)
       {
            if ($result->num_rows > 0) 
            {
              
              //echo "<label>Most Played Songs</label>";
              echo "<tr><th>Song Title</th><th>Plays</th></tr>";
        		while($row = $result->fetch_assoc()){		
            	echo "<tr><td>" . $row["title"] . "</td><td>". $row["plays"]. "</td></tr>";
            }
        }
            else{
            	echo "No results found";
            }
        }
        else
        {
        	echo mysql_error($result);
        }         

  }

}
?>
</table>

<table class="table2" border="1">
<?php
$conn = mysqli_connect("localhost", "root", "", "Spotify");
if(isset($_GET['songs']) && !empty($_GET['songs'])){  
  $songs=$_GET['songs'];

  if($songs=="User Registration") 
  {
      $sql = "SELECT * FROM users order by signUpDate desc" ;
      $result = $conn->query($sql);
       if($result)
       {
            if ($result->num_rows > 0) 
            {
             // echo "<label>User Registration Report</label>";
              echo "<tr><th>First Name</th><th>Last Name</th><th>E-mail</th><th>Signup Date</th></tr>";
            while($row = $result->fetch_assoc()){   
              echo "<tr><td>" . $row["firstName"] . "</td><td>". $row["lastName"]. "</td><td>".$row["email"]."</td><td>".$row["signUpDate"]."</td></tr>";
            }
        }
            else{
              echo "No results found";
            }
        }
        else
        {
          echo mysql_error($result);
        }         

  }

}
?>
</table>

   		</form>
  	</div>
  </div>


 <?php include("includes/footer.php"); ?>