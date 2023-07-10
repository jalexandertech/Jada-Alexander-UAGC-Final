<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the connection.php file
require_once 'includes/DatabaseConnection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Student Profile</title>
</head>
<body>
<?php require 'header.php';?>

<div class="container ">
<div class="row">
    <div class="col text-center">
<?php
    if (isset($_SESSION['logged_in'])){
      echo "<h1>Welcome</h1>";
    }
  ?>
  <img class="user-img" src="./img/user.jpeg" class="rounded mx-auto d-block" alt="...">

<p class="student-logged">You are logged into your student portal.</p>

<h2>Your information</h2>
<?php
if (isset($_SESSION['logged_in'])){
    $email = $_SESSION['email'];

    // Establish a database connection
    $db = new DatabaseConnection();
    $con = $db->connect();

    // Retrieve the employee information from the database
    $query = "SELECT firstName, lastName, email, street, city, state, zip, userName, phoneNumber, DOB FROM users WHERE email='$email'";
    $data = $db->executeSelectQuery($query);

    // Check if any rows were returned
    if (!empty($data)) {
        $user = $data[0]; 

        // Display the employee information
        echo "<p>First Name: " . $user['firstName'] . "</p>";
        echo "<p>Last Name: " . $user['lastName'] . "</p>";
        echo "<p>Email: " . $user['email'] . "</p>";
        echo "<p>Street: " . $user['street'] . "</p>";
        echo "<p>City: " . $user['city'] . "</p>";
        echo "<p>State: " . $user['state'] . "</p>";
        echo "<p>Zip: " . $user['zip'] . "</p>";
        echo "<p>Username: " . $user['userName'] . "</p>";
        echo "<p>Phone Number: " . $user['phoneNumber'] . "</p>";
        echo "<p>Date of Birth: " . $user['DOB'] . "</p>";
    } else {
        echo "No user found.";
    }
    } 
?>
</div>
<div class="col">
<div class="accordion">
  <div class="accordion-item">
    <h2 class="accordion-header">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Course Enrollment
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
      <form method="post" action="includes/profile.inc.php">
                    <div class="mb-3">
                        <label for="course_id" class="form-label">Select a course:</label>
                        <select class="form-select" name="courseID" id="courseID">
                            <option value="1">ACC206: Principles of Accounting II</option>
                            <option value="2">ACC208: Accounting for Managers</option>
                            <option value="3">ACC305: Intermediate Accounting I</option>
                        </select>
                    </div>
                    <button type="submit" name="enroll" class="btn btn-primary">Enroll</button>
                </form>      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Grades
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Course</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Semester</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ACC201</td>
      <td>Principles of Financial Accounting</td>
      <td>Fall 2023</td>
      <td>A+</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ACC202</td>
      <td>Principles of Managerial Accounting</td>
      <td>Fall 2023</td>
      <td>A+</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>ACC205</td>
      <td>Principles of Accounting I</td>
      <td>Fall 2023</td>
      <td>A+</td>
    </tr>
  </tbody>
</table>      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Resources
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>As a college student, we understand that you need access to various resources to support your academic journey and personal growth. Our student portal is designed to provide you with a comprehensive range of resources that will empower you to succeed in your college life. Here, you'll find everything you need to make the most of your college experience.
</p>
      <ol>
        <li>Academic Support:</li>
        <p>We offer a wide array of academic support services to help you excel in your studies. From tutoring programs and study groups to academic advisors and writing centers, our dedicated team is here to guide you towards achieving your academic goals. Whether you need assistance with a challenging course or want to improve your study skills, our academic support resources are just a click away.</p>

        <li>Library and Research</li>
        <p>Our extensive library resources ensure that you have access to a vast collection of books, journals, research papers, and digital resources. Our library staff is available to assist you in navigating the library catalog, conducting research, and finding relevant materials for your assignments. Take advantage of our state-of-the-art research facilities and explore the world of knowledge at your fingertips.</p>

        <li>Career Development:</li>
        <p>Preparing for your future career is an essential part of your college experience. Our career development resources provide valuable guidance, job search support, and networking opportunities. From career counseling and resume writing workshops to internship programs and job fairs, we are committed to equipping you with the skills and connections necessary for a successful transition into the professional world.</p>
      </ol>

      </div>
    </div>
  </div>
</div>
  </div>
<div>
  </div>

</div>

</body>
</html>
