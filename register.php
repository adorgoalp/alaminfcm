<?php 
echo "Started";
    if (isset($_POST["token"])) {
		echo "Entered in IF";
        
           $token=$_POST["token"];
           $conn = mysqli_connect("localhost","root","","alamin") or die("Error connecting");
           $q="INSERT INTO users (token) VALUES ( '$token') "
              ." ON DUPLICATE KEY UPDATE token = '$token';";
              
      mysqli_query($conn,$q) or die(mysqli_error($conn));
      mysqli_close($conn);
    }
	
	echo "End";
 ?>