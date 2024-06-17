<?php
require_once "../conn/conn.php";
session_start();

if(isset($_POST["submit"])){
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    

    $query = mysqli_query($conn,"SELECT * FROM user WHERE Username='$username' and Password ='$password'") or die();
    $fetch = mysqli_fetch_array($query);
    $row = mysqli_num_rows($query);

   
        if($row > 0){
			$_SESSION['Username']=$fetch['Username'];
			echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='../Pages/User.php'</script>";
		}
        else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='../Pages/Sign_in.php'</script>";
		}
		

}  
?>