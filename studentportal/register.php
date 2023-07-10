    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <title>Register</title>
    </head>
    <body>
    <?php require 'header.php';?>

    <div class="container form-container">
    <h1>Please complete the information below to register.</h1>

        <form action="includes/register.inc.php" method="post" class="row g-3">
        <div class="col-md-6 reg-form">
                <label for="fName" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstName" id="fName">
            </div>
            <div class="col-md-6 reg-form">
                <label for="lName" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="lName">
            </div>
        
            <div class="col-md-12 reg-form">
                <label for="inputAddress" class="form-label">Street Address</label>
                <input type="text" class="form-control" name="street" id="inputStreet" placeholder="Street Address">
            </div>
            <div class="col-md-6 reg-form">
                <label for="inputAddress" class="form-label">City</label>
                <input type="text" class="form-control" name="city" id="inputCity" placeholder="City">
            </div>
            <div class="col-md-4 reg-form">
                <label for="inputAddress" class="form-label">State</label>
                <input type="text" class="form-control" name="state" id="inputState" placeholder="State">
            </div>
            <div class="col-md-2 reg-form">
                <label for="inputAddress" class="form-label">Zip</label>
                <input type="text" class="form-control" name="zip" id="inputZip" placeholder="Zip">
            </div>
            <div class="col-4 reg-form">
                <label for="phoneNumber" class="form-label">Phone number</label>
                <input type="text"  class="form-control" name="phone" id="phoneNumber">
            </div>
            <div class="col-2 reg-form">
                <label for="inputDOB" class="form-label">DOB</label>
                <input type="text"  class="form-control" name="DOB" id="inputDOB">
            </div>
            <div class="col-md-7 reg-form">
                <label for="email" class="form-label">Email</label>
                <input type="email"  class="form-control" name="email" id="email">
            </div>
            <div class="col-md-6 reg-form">
                <label for="userName" class="form-label">Username</label>
                <input type="text"  class="form-control" name="userName" id="userName">
            </div>
            <div class="col-md-4 reg-form">
            <label for="inputPassword5" class="form-label">Password</label>
    <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" name="password">
    <div id="passwordHelpBlock" class="form-text">
    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
    </div>
            </div>
    <div class="col-12">
         <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
    </div>
        </form>

    </div>

    </div>

    </body>
    </html>