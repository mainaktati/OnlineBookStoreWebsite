<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="https://static.wixstatic.com/media/8336f6_19b307c824f1407cb4f5c2c12aceda76~mv2.jpg/v1/fill/w_560,h_360,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/8336f6_19b307c824f1407cb4f5c2c12aceda76~mv2.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Pushtak is your best source to buy cheap book online, make online book purchase, making us the best book website in India.</p>
         <p> Choosing Pushtak can allow you to purchase the best selling books which are being written by some of the most popular authors. Apart from the numerous advantages of choosing us, some of the most important ones are ,Facility to choose from a wide range of books on different subjects,Books available at affordable prices. </p>
         <a href="#contact" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>It was a very convinient to use the site. Very responsive.</p>
         
         <h3>Jesson Roy</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>My experience of using this website for buying books was good.</p>
         
         <h3>lora</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>The prices of the books are pretty much less than the other online stores.</p>
        
         <h3>pitter pan</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/Durjoy datta.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Durjoy Datta</h3>
      </div>

      <div class="box">
         <img src="images/Sir Arthur Conan Doyle.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Sir Arthur Conan Doyle</h3>
      </div>

      <div class="box">
         <img src="images/Tarashankar.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Tarashankar Bandopadhyay</h3>
      </div>
   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>