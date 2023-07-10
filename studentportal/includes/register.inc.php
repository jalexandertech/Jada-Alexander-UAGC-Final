
<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'DatabaseConnection.php';

$db = new DatabaseConnection();
$con = $db->connect();

if(isset($_POST['submit'])){
   $firstName = mysqli_real_escape_string($con,$_POST['firstName']);
   $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $street = mysqli_real_escape_string($con, $_POST['street']);
   $city = mysqli_real_escape_string($con, $_POST['city']);
   $state = mysqli_real_escape_string($con, $_POST['state']);
   $zip = mysqli_real_escape_string($con, $_POST['zip']);
   $userName = mysqli_real_escape_string($con, $_POST['userName']);
   $password = mysqli_real_escape_string($con, $_POST['password']);
   $phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
   $DOB = mysqli_real_escape_string($con, $_POST['DOB']);


   $sql = "INSERT INTO users (firstName, lastName, email, street, city, state, zip, userName, password, phoneNumber, DOB) 
   VALUES ('$firstName', '$lastName', '$email', '$street', '$city', '$state', '$zip', '$userName',	'$password', '$phoneNumber', '$DOB')";

   $result = $db->executeQuery($sql); 

   if($result){
       echo "User registered successfully";
       header('Location: ../login.php');
       exit();

   } else {
       echo "Error registering user: " . mysqli_error($con);
   }
}


?>