<!DOCTYPE html>
<html>

<head>
    <title>Basic Login Page</title>
<link rel="stylesheet" href="../public/styles/login.css">    
</head>

<body>
    <h1>Welcome to Dashboard of Analytics</h1>

    <div id="user-info" style="display: none;">
        <p>You are logged in as: <span id="user-name"></span></p>
    </div>
    
     <form name = "form" action="../routes/loginchck.php" method="POST"> 
        <!-- will not load if this is not comment security reason local files not allowed -->
    <div id="login-form"> 
        <label for="username">Username: </label>
        <input type="text" id="username" name="full_name" required placeholder="admin"/><br /><br />
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required placeholder="key"/><br /><br />
        <button id="login-button" name = "login"> Log In </button>
        <button id="signUp-button" name = "signuping">Sign Up </button>
    </div>
    <!-- </form> -->

    <button id="logout-button" style="display: none;">Log Out</button>

<script src="../routes/loginchck.php"></script>
<!-- <script src="../routes/login.js"></script> -->

<script>
document.getElementById("signUp-button").addEventListener("click", function () {
    // Use JavaScript to redirect to another page
    window.location.href = "../index.php";
});
</script>

</body>


</html>