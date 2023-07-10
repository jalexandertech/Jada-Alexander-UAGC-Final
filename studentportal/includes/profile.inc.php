<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the connection.php file
require_once 'DatabaseConnection.php';

// Check if the course enrollment form is submitted
if (isset($_POST['enroll'])) {
    // Get the selected course ID from the form
    $courseId = $_POST['courseID'];

    // Get the user's email from the session
    $email = $_SESSION['email'];

    // Establish a database connection
    $db = new DatabaseConnection();
    $con = $db->connect();

    // Check if the user is already enrolled in the selected course
    $query = "SELECT * FROM registration WHERE email='$email' AND courseID='$courseId'";
    $result = $db->executeSelectQuery($query);

    if (!empty($result)) {
        echo "You are already enrolled in this course.";
    } else {
        // Manually assign the courseID value based on the selected option
        if ($courseId == 1) {
            $courseIdValue = 'ACC206';
        } elseif ($courseId == 2) {
            $courseIdValue = 'ACC208';
        } elseif ($courseId == 3) {
            $courseIdValue = 'ACC305';
        } else {
            // Handle any other cases or invalid selections
            echo "Invalid course selection.";
            return;
        }

        // Insert the enrollment record into the database
        $query = "INSERT INTO registration (email, courseID) VALUES ('$email', '$courseId')";
        $success = $db->executeQuery($query);

        if ($success) {
            echo "You have successfully enrolled in the course.";
        } else {
            echo "Failed to enroll in the course.";
        }
    }
}
?>