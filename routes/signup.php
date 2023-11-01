<?php
include("../connection.php");
if (isset($_POST['submit'])) {

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";

    if ($db->query($query) === TRUE) {
        // Sign-up successful
        echo "Success";
        header('Location: ../views/login.php');
        exit;
    } else {
        echo "Error signing up: " . $db->error;
    }
}
?>
