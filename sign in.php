<!DOCTYPE html>
<html lang="en">

<head>    
    <title> Sign in </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php @include 'header.php'; ?>
    
    <?php @include 'home.php'; ?>



    <!-- Login section satrts -->

    <section class="login" id="login">
        <div class="container">
            <div class="imagetop">
                <div class="image1"></div>
            </div>
            <div class="Login">
                <h2>SIGN IN</h2>
                <form>
                    <div class="inputbox">
                        <label for="email"><i class="fa fa-user"></i></label>
                        <input type="email" id="email" placeholder="Username">
                    </div>

                    <div class="inputbox">
                        <label for="password"><i class="fa fa-lock"></i></label>
                        <input type="password" id="password" placeholder="Password">
                    </div>

                    <input type="submit" value="SIGN IN">
                </form>
                <p>Forgot password ?</p>
                <p>Don't Have account?<span>SIGN UP</span></p>
            </div>
            <div class="imagebottom">

            </div>
        </div>
    </section>

    <!-- Login section ends -->

    <!-- Scripts -->

    <script src="script.js"></script>
    
</body>

</html>