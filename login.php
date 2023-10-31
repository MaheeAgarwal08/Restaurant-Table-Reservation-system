<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  include  'partials/_dbconnect.php';
  
  $name=$_POST["name"];
  $password=$_POST["password"];
 
  
 
    $sql="SELECT * FROM userdata WHERE name='$name' AND password='$password'";
    $result=mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
    if($num==1){
      $login=true;
      session_start();
      $_SESSION['loggedin']=true;
      $_Session['name']=$name;
      header("location:welcome.php");
    }
    
  
  else{
    $showError="Invalid Credentials";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Login</title>
    
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
<?php
if($login){

  echo'  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success! </strong> You are logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if($showError){

  echo'  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!echo</strong> '.$showError.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
    <div class="container my-4">
      <h1>Welcome to Ratan Restaurant.</h1>
      <h6>Please Login to go to the Welcome page of our website or go to the SignUp page to make a new account.</h6>
        <h3 class='text-center' >Login to our website</h3>
        
<form action="/LOGINSYSTEM/login.php"  method="post">


  <div class="form-group ">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  name='name' aria-describedby="emailHelp">
    
  </div>
  <div class="form-group ">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  
 
  <button type="submit" class="btn btn-primary ">Login</button>
</form>
 
   
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
</body>
</html>