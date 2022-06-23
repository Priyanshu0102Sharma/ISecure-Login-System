<?php
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
    header("location: login.php");
    // echo "Something went wrong!!";
    exit;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
    <link rel="stylesheet" href="partials/styles.css">

    <title>Login System</title>
</head>
<body>
    <?php require"partials/navbar.php"; ?>


   <!-- <?php echo "WELCOME ".$_SESSION['username']." We are waiting for you"; ?> -->

<!-- alert message start here -->
<div class="container">
<div class="alert alert-info my-3 " role="alert">
  <h4 class="alert-heading">Welcome<?php echo" ".$_SESSION['username'].". We are waiting for you"?></h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  
  <p class="mb-0">Whenever you need to, be logout. <a href="/LoginSystem/logout.php"> using this link</a></p>
</div>
</div>

<!-- alert messageg ends here -->



<!-- bootstrap script link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>
</html>