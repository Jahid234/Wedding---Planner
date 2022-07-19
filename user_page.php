<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />    
    
    <!-- custom css file link  -->
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php @include 'header.php'; ?>
    
    <div class="container">

        <div class="content">
            <h3>Hi! <span>User</span></h3> <br>

            <h1>welcome <span> <?php echo $_SESSION['user_name'] ?> </span></h1> <br>

            <p>This is an User page</p> <br>

            <a href="contact.php" class="btn">Contact Us</a>

            <a href="payment.php" class="btn">Payment</a>

            <a href="index.php" class="btn">Home</a>            

        </div>

    </div>
    
</body>
</html>