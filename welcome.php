<?php
session_start();
if((!isset($_SESSION['loggedin'])) || $_SESSION["loggedin"]!=true){
  header("location:login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel table resesrvation system.</title>
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

    <title>Welcome</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<style>
 /* Resetting default margin and padding */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Mobile-first responsive design */
body {
  font-family: Arial, sans-serif;
  background-color: #f7f7f7;
  line-height: 1.6;
}

header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 60px 0;
}

h1 {
  font-size: 2em;
}

/* Common styles for sections */
.facilities,
.special-dishes,
.discount-offers,
.ratings-reviews {
  padding: 40px 20px;
}


.facility,
.dish,
.review {
  text-align: center;
  margin-bottom: 30px;
}

/* Image responsiveness */
.facility img,
.dish img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
}

/* Review box */
.review {
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 8px;
}

.review p {
  margin: 10px 0;
}

/* Footer */
footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px 0;
}

/* Media queries for responsiveness */
@media (min-width: 768px) {
  header {
    padding: 80px 0;
  }

  h1 {
    font-size: 3em;
  }

  .facilities,
  .special-dishes,
  .discount-offers,
  .ratings-reviews {
    padding: 60px 20px;
    display: flex;
    justify-content: space-around;
    align-items: center;
  }

  .facility,
  .dish,
  .review {
    width: 45%;
  }
}

  </style>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    
<div class="container ">
    <div class="alert alert-success" role="alert">
   <h4 class="alert-heading">Welcome!!</h4>
   <p>
    Hey,how are you doing? Welcome to iSecure.<hr>
   <p class="mb-0">Whenever you need to, be sure to logout using this link.<a href="/LOGINSYSTEM/logout.php">Logout</a>.</p>
</div>
    </div>
    <h1 style="text-align:center">Welcome to Ratan restaurant</h1>
    <h6 style="text-align:center">Book tables according to your choice and convenience.</h6>
    <hr>
    <h2 style="text-align:center">Our Facilities</h2>
    <section  class="facilities">
    
    <div class="facility">
      <img src="partials\outdoor_dining.jpg" alt="Facility 1">
      <h3>Outdoor Dining</h3>
      <p>Enjoy our beautiful outdoor seating area.</p>
    </div>
    <div class="facility">
      <img src="private_events3.jpg" alt="Facility 2">
      <h3>Private Events</h3>
      <p>Host your special events in our private dining rooms.</p>
    </div>
  </section>
  <h2 style="text-align:center">Special Dishes</h2>
  <section class="special-dishes">
    
    <div class="dish">
      <img src="special_steak.jpg" alt="Special Dish 1">
      <h3>Signature Steak</h3>
      <p>A mouthwatering steak prepared by our chefs.</p>
    </div>
    <div class="dish">
      <img src="seafood_platter.jpg" alt="Special Dish 2">
      <h3>Seafood Platter</h3>
      <p>Fresh seafood platter with a variety of flavors.</p>
    </div>
  </section>
    <hr>
  <section class="discount-offers">
    <h2>Book your Favourite Table Now to get the benefit of our Special Offers only for you.</h2>
    <h5><p><a href="/LOGINSYSTEM/bookTable.php">Book My Table</a></p></h5>
  </section>
    <section class="ratings-reviews">
    <h2>Ratings & Reviews</h2>
    <div class="review">
      <h3>Customer Review 1</h3>
      <p>"Great food and excellent service! Highly recommended."</p>
      <p><strong>Rating: 5/5</strong></p>
    </div>
    <div class="review">
      <h3>Customer Review 2</h3>
      <p>"The ambiance and taste of the dishes were amazing!"</p>
      <p><strong>Rating: 4.5/5</strong></p>
    </div>
  </section>
  <footer>
    <p>&copy; 2023 Ratan Restaurant. All Rights Reserved.</p>
  </footer>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </body>
</html>
</body>
</html>