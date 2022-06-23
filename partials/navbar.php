

 <!-- navbar start here -->
<?php

if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
$logedin=true;
}
else
$logedin=false;

echo '<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ISecure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/LoginSystem/welcome.php">HOME</a>
        </li>';
      if($logedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/LoginSystem/signUP.php">Sign Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LoginSystem/login.php">Log In</a>
        </li>';}
        if(!$logedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/LoginSystem/logout.php">Log Out</a>
          </li>';
        }
        echo '
          </ul>
    </div>
  </div>
</nav>';
?>

<!-- navbar ends here -->

