<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
<?php require 'header.php';?>


<div class="container login-container">
<h1>Login Here</h1>

    <form action="includes/login.inc.php" method="post" class="row g-5">
        <div class="col-md-8">
            <label for="email" class="form-label">Email address</label>
            <input type="text"  class="form-control" name="email" id="email">
        </div>
        <div class="col-md-8">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password"  class="form-control" name="password" id="inputPassword">
        </div>
        <div class="col-12">
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
</div>
    </form>
</div>

</div>

<?php require_once 'footer.php';?>
</body>
</html>