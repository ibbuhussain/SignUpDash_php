<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="./public/styles/signUp.css" rel="stylesheet">
</head>
<body> 
    <div class="signup-container">
        <h1>Sign Up</h1>
        <form name = "form" action="./routes/signup.php" method="POST">

        <div class="input-group">
            <input type="text" name="full_name" required placeholder="Full Name">
        </div>
        <div class="input-group">
            <input type="email" name="email" required placeholder="Email">
        </div>
        <div class="input-group">
            <input type="password" name="password" required placeholder="Password">
        </div>

        <button type = "submit" name = "submit" id="signUpmade">SUBMIT</button>
        <p class="signup-link">Already have an account? <a href="./views/login.php">Log In</a></p>

        </form>
    </div>
</body>
</html>
