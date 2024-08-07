<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/sign_in.css">
</head>
<body>
    <div class="container">
        <div class="register">
           <div class="register-info">
            <h1>Sign In</h1>
            <small>Don't Have An Account? <a href="./Register.php">Register Now</a></small>
           </div>
            <form method="post"  action="../Functions/login.php">
                <input type="text" placeholder="Username" name="Username">
                <input type="password" placeholder="Password" name="Password">
                <button type="submit" name="submit">Sign In</button>
            </form>
        </div>
        <img src="../images/img (5).png" alt="">
    </div>
    <script src="../js/app.js"></script>
</body>
</html>