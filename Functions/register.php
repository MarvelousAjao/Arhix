<?php
require_once "../conn/conn.php";
session_start();

if(isset($_POST["submit"])){
    $firstname = $_POST["Firstname"];
    $lastname = $_POST["Lastname"];
    $username = $_POST["Username"];
    $password = $_POST["pass"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    


    $query = mysqli_query($conn,"INSERT INTO `user` (`Firstname`, `Lastname`, `Username`, `Password`, `Email`, `Date of Birth`) VALUES ('$firstname', '$lastname', '$username', '$password', '$email', '$dob') ") or die();
  
    

        if($query){
			$_SESSION['Username']=$fetch['Username'];
			echo "<script>alert('Registered Successfully!')</script>";
			echo "<script>window.location='../Pages/Sign_in.php'</script>";
		}
        else{
			echo "<script>alert('failed to Register'')</script>";
		}
		

}  
?>