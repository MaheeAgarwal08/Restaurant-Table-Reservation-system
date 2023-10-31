<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  include  'partials/_dbconnect.php';
  
  $name=$_POST["name"];
  $password=$_POST["password"];
  $Cpassword=$_POST["Cpassword"];
  $exists=false;
  //check whether this username exists
  $existsSql="SELECT * FROM userdata WHERE name='$name'";
  $result=mysqli_query($conn,$existsSql);
  $numExistRows=mysqli_num_rows($result);
  if($numExistRows>0){
   // $exists=true;
   $showError="Username Already Exists";
  }

else{
   // $exixts=false;
  
  if(($password==$Cpassword) && $exists==false){
    $sql="INSERT INTO `userdata` ( `name`, `password`, `dt`) VALUES ('$name', '$password', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
      $showAlert=true;
    }
    
  }
  else{
    $showError="Passwords do not match.";
  }
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

    <title>SignUp</title>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
<?php
if($showAlert){

  echo'  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success! Your account is successfully created and you can login.</strong> You should check in on some of those fields below.
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
        <h1 class='text-center' >Signup to our website</h1>
        
<form action="/LOGINSYSTEM/signup.php"  method="post">


  <div class="form-group ">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  name='name' aria-describedby="emailHelp">
    
  </div>
  <div class="form-group ">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
  </div>
  <div class="form-group ">
    <label for="Cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="Cpassword" name="Cpassword">
    <small id="emailHelp" class="form-text text-muted">Make sure to enter the same password.</small>
  </div>
 
  <button type="submit" class="btn btn-primary ">SignUp</button>
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