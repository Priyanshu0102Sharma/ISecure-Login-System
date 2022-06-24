<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
require "partials/_dbconnect.php";

$username=$_POST['username'];
$password=$_POST['password'];



    // $sql="SELECT * from users where username ='$username' AND password='$password'";
    $sql="SELECT * from users where username ='$username'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

    if($num==1)
    { while($row=mysqli_fetch_assoc($result))
      {
        if(password_verify($password,$row['password']))
        {
          $login=true;
          
          echo '<div class="alert alert-success alert-dismissible" role="alert">
            <strong>SUCCESS</strong> you have Logged in!! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
  
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            echo "Succesful";
            header("location: welcome.php");
        }
        else
        {
          echo '<div class="alert alert-danger alert-dismissible" role="alert">
          <strong>SORRY</strong> INVALID CREDENTIALS!! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';  
        }
      }

    }
    else
    {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
          <strong>SORRY</strong> INVALID CREDENTIALS!! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }
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
<div class="container">
    <h2 class="text-center">Log in to our website</h2>

<!-- form start here -->
<div class="form1">
<form aciton="LoginSystem/login.php" method="POST" >
  <div class="mb-3 col-md-6">
    <label for="username" class="form-label">User Name</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    
  </div>
  <!-- <div class="mb-3 col-md-6 ">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    
  </div> -->
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <!-- <div class="mb-3 col-md-6">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div id="password-confirmation" class="form-text">Make sure to enter same password.</div>
  </div> -->
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>  
</div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<!-- form ends here -->
</div>
</div>




<!-- bootstrap script link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>
</html>