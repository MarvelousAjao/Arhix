<?php 
   session_start();
   if(!ISSET($_SESSION['Username'])){
		header('location:../index.php');
	}
  require_once("../conn/conn.php");

  $query = mysqli_query($conn,"SELECT * FROM user where Username = '$_SESSION[Username]'");
  $fetch = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web//css/all.min.css">
</head>
<body>

<div class="container">
<?php
  include "../components/header.php";

 

  ?>
  <main>
  <?php 
     $hour = date("H");
     if($hour < 12){
      echo "<h3>Good Morning,". $fetch['Username']."</h3>";
     }
     elseif($hour<18){
         echo "<h3>Good Afternoon,". $fetch['Username']."<h3>";
     }
     else{
      echo "<h3>Good Evening,". $fetch['Username']."</h3>";
     }
    ?>


  </main>

  </div>




</body>
</html>