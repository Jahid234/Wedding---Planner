<!DOCTYPE html>
<html lang="en">

<head>    
    <title> PAYMENT </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <!-- css file link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css">    

</head>

<body>

    <?php @include 'header.php'; ?>

    <!-- Payment section starts -->

    <section class="Payment" id="payment">
        <h1 class>our pricing Criteria</h1>

        <div class="box-container">

            <div class="box">
                <h3> <b> basic plan </b> </h3>
                <div class="price">$450/-</div>
                <div class="list">
                    <p> <i class="fas fa-check"></i> <b> photography </b> </p>
                    <p> <i class="fas fa-check"></i> <b> bribe makeup </b> </p>
                    <p> <i class="fas fa-check"></i> <b> wedding ceromony </b> </p>
                    <p> <i class="fas fa-check"></i> <b> wedding cake </b> </p>
                    <p> <i class="fas fa-check"></i> <b> wedding registory </b> </p>
                    <p> <i class="fas fa-check"></i> <b> meals & drinks </b> </p>
                    <p> <i class="fas fa-check"></i> <b> guest invitations </b> </p>
                </div>
                <a href="login_form.php" class="btn">choose plan</a>
            </div>

            <div class="box">
                <h3><b> premium plan </b> </h3>
                <div class="price">$850/-</div>
                <div class="list">
                    <p> <i class="fas fa-check"></i> <b> photography </b> </p>
                    <p> <i class="fas fa-check"></i> <b> bribe makeup </b> </p>
                    <p> <i class="fas fa-check"></i> <b> wedding ceromony </b> </p>
                    <p> <i class="fas fa-check"></i> <b> wedding cake </b> </p>
                    <p> <i class="fas fa-check"></i> <b> wedding registory </b> </p>
                    <p> <i class="fas fa-check"></i> <b> meals & drinks </b> </p>
                    <p> <i class="fas fa-check"></i> <b> guest invitations </b> </p>
                </div>
                <a href=login_form.php" class="btn">choose plan</a>
            </div>

            <div class="box">
                <h3><b> ultimate plan </b> </h3>
                <div class="price">$1250/-</div>
                <div class="list">
                    <p> <i class="fas fa-check"></i> <b> photography </b> </p>
                    <p> <i class="fas fa-check"></i> <b> bribe makeup </b> </p>
                    <p> <i class="fas fa-check"></i> <b> wedding ceromony </b> </p>
                    <p> <i class="fas fa-check"></i> <b> wedding cake </b> </p>
                    <p> <i class="fas fa-check"></i> <b> wedding registory </b> </p>
                    <p> <i class="fas fa-check"></i> <b> meals & drinks </b> </p>
                    <p> <i class="fas fa-check"></i> <b> guest invitations </b> </p>
                </div>
                <a href="login_form.php" class="btn">choose plan</a>
            </div>

        </div>
    </section>

    <?php @include 'clients.php'; ?>
    
    <?php @include 'team.php'; ?>

    <?php @include 'footer.php'; ?>


    <!-- Scripts -->

    <script src="script.js"></script>

</body>

</html>