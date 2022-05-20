<!DOCTYPE html>
<html lang="en">

<head>    
    <title> Blog </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php @include 'header.php'; ?>

    <?php @include 'home.php'; ?>


    <!-- blog section starts  -->

<section class="blog" id="blog">

<div class="heading">
    <h1>our latest blogs</h1>
    <img src="header-img.png" alt="">
</div>

<div class="box-container">

    <div class="box">
        <img src="blog-1.jpg" alt="">
        <div class="info">
            <h3> <span>01. </span> blog title goes here </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium odio a voluptate. Eaque vel ab dolorem, earum optio aliquam.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="blog-2.jpg" alt="">
        <div class="info">
            <h3> <span>02. </span> blog title goes here </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium odio a voluptate. Eaque vel ab dolorem, earum optio aliquam.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

    <div class="box">
        <img src="blog-3.jpg" alt="">
        <div class="info">
            <h3> <span>03. </span> blog title goes here </h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque praesentium odio a voluptate. Eaque vel ab dolorem, earum optio aliquam.</p>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>

</div>

</section>

<!-- blog section ends-->


    <!-- Scripts -->

    <script src="script.js"></script>

</body>

</html>