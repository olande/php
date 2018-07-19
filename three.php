
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbase = "three";

// Create connection
$conn = mysqli_connect($servername,$username, $password,$dbase);  
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "connection success";
}
      $username = $_POST['username'];
       $firstname = $_POST['firstname'];
        $dob = $_POST['dob'];
         $gender = $_POST['gender'];
          $telephone = $_POST['telephone'];
           $address = $_POST['address'];
            $city = $_POST['city'];
             $email = $_POST['email'];

             echo $username;
             
$sql = "INSERT INTO three (username,firstname,dob,gender,telephone,address,city,email)
							VALUES ('$username','$firstname','$dob','$gender','$telephone','$address','$city','$email')";
							if(mysqli_query($conn,$sql)){
									echo "New record added 
									<br/>";
									echo "<hr>";
							}else{
								echo "failed to execute commands";
							}
mysqli_close($conn);
?>