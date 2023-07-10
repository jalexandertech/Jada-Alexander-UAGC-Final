<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'DatabaseConnection.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];//Plain text password

    // Establish a database connection
    $db = new DatabaseConnection();
    $con = $db->connect();

    // Sanitize the inputs to prevent SQL injection
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password); 
   

    // Query to fetch user information based on the provided email
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);
 

    if ($result && mysqli_num_rows($result) > 0) {
        // User is authenticated, set session variables or perform further actions
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
            
        // Redirect to a logged-in page
        header('Location: ../profile.php');
        exit();
    } else {
        // User entered the incorrect password or the user was not found
        echo 'User not found';
    }
}
?>
