<?php

$conn = mysqli_connect('localhost', 'root','','user_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];
   $plan = $_POST['plan'];
   $address = $_POST['address'];
   $message = $_POST['message'];

   $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";

   mysqli_query($conn, $insert);

   header('location:index.php');

}

?>

<!DOCTYPE html>
<html lang="en">

<head>    
   <title> CONTACT </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
   <!-- css file link -->
   <link rel="stylesheet" href="style.css">   

</head>

<body>

    <?php @include 'header.php'; ?>  


   <!-- contact section starts  -->

   <section class="contact" id="contact">

   <div class="heading">
      <h1>contact us</h1>
      <img src="img/header-img.png" alt="">
   </div>

   <form action="" method="post">

         <div class="flex">

            <div class="inputBox">
               <span>your name</span>
               <input type="text" placeholder="enter your name" name="name" required>
            </div>

            <div class="inputBox">
               <span>your email</span>
               <input type="email" placeholder="enter your email" name="email" required>
            </div>

            <div class="inputBox">
               <span>your number</span>
               <input type="number" placeholder="enter your number" name="number" required>
            </div>

            <div class="inputBox">
               <span>choose plan</span>
               <select name="plan">
                  <option value="basic">basic plan</option>
                  <option value="premium">premium plan</option>
                  <option value="ultimate">ultimate plan</option>
               </select>
            </div>

            <div class="inputBox">
               <span>your address</span>            
               <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
            </div>

            <div class="inputBox">
               <span>your message</span>            
               <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
            </div>

         </div>

         <input type="submit" value="send message" name="send" class="btn">

      </form>

   </section>

   <!-- contact section ends -->

   <?php @include 'clients.php'; ?>

    <!-- Scripts -->

    <script src="script.js"></script>

</body>

</html>