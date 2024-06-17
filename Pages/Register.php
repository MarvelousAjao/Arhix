<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register into Ahrix</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="container">
        <div class="register">
           <div class="register-info">
            <h1>Register</h1>
            <small>Already Have An Account? <a href="./Sign_In.php">Sign In</a></small>
           </div>
            <form action="../Functions/register.php" method="POST">
                <input type="text" placeholder="Firstname" name="Firstname" required>
                <input type="text" placeholder="Lastname" name="Lastname" required>
                <input type="text" placeholder="Username" name="Username" required>
                <input type="password" placeholder="Password" name="pass"  id="pass" required>
                <input type="password" placeholder="Re-Enter Password" name="re-pass" id="re-pass" required>
                <input type="email" placeholder="Email Address" name="email" required>
               <div class="dob">
                <small>Date of Birth</small>
               <input type="date" placeholder="Date of Birth" title="Date of Birth" name="dob" required>
               </div>
               <div class="terms"><input type="checkbox" name="" id="" required><small>I have agreed to terms and conditions laid out by Arhix</small></div>
               <button type="submit" name="submit">Register</button>
            </form>
        </div>
        <img src="../images/img (10).png" alt="">
    </div>
   <script src="../js/app.js"></script>
</body>
</html>

