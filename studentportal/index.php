<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Home Page</title>
</head>
<body>

<?php require 'header.php'; ?>


<div class="container p-5 mb-2 bg-info-subtle text-emphasis-info">
<h1>Self-Service Portal</h1>

<p>Log into the portal to view your academic information, receive personalized communication, and use our self-service tools.</p>
</div>

<div class="container ">
<div class="card-deck" style="display: flex" >
  <div class="card" style="margin-right: 10px;">
    <img class="card-img-top" src="./img/courses.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Courses</h5>
      <p class="card-text">Explore our wide range of courses designed to enhance your knowledge and skills. </p>
    </div>
  </div>
  <div class="card" style="margin-right: 10px;">
    <img class="card-img-top" src="./img/academics.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Academic</h5>
      <p class="card-text">At our institution, we prioritize academic excellence. Our rigorous academic programs provide students with a solid foundation in various disciplines. </p>
    </div>
  </div>
  <div class="card" style="margin-right: 10px;">
    <img class="card-img-top" src="./img/staff.jpg" alt="Card image cap">
    <div class="card-body" >
      <h5 class="card-title">Staff</h5>
      <p class="card-text">Our dedicated and highly qualified staff is committed to providing exceptional support and guidance to our students. </p>
    </div>
  </div>
  <div class="card" style="margin-right: 10px;">
    <img class="card-img-top" src="./img/classes.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Classes</h5>
      <p class="card-text">Discover our diverse range of classes designed to inspire learning and personal development. </p>
    </div>
  </div>
</div>

<a class="btn btn-primary login" href="login.php" role="button">Login</a>
<p class="register">If you are not already register, <a href="register.php">register here</a> </p>

</div>


</body>
</html>