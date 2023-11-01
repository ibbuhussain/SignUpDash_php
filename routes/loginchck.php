<?php
include("../connection.php");

// Handle POST request from the login form
if (isset($_POST['login'])) {
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];

    // Query the database to check credentials
    $query = "SELECT * FROM users WHERE full_name = '$full_name' AND password = '$password'";

    // Perform the query
    $result = $db->query($query);

    if ($result) {
        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Login successful 
            echo "Login successful"; // Debugging output
            header('Location: ../views/dashbrd.html');
            exit;
        } else {
            // Login failed (no matching user found)
            echo "Invalid username or password. Please try again.";
            header('Location: ../views/login.php');
        }
    } else {
        // Error checking credentials
        echo "Error checking credentials: " . mysqli_error($db);
    }
}
 
?>

