<!DOCTYPE html>
<html lang="en">

<head>    
    <title> Sign in </title>

    <!-- font cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php @include 'header.php'; ?>   
    
    <!-- Login section satrts -->

    <section class="login" id="login">
        <div class="container">            
            <div class="Login">
                <h2>Log in</h2>
                <form>
                    <div class="inputbox">
                        <label for="email"><i class="fa fa-user"></i></label>
                        <input type="email" id="email" placeholder="Username">
                    </div>

                    <div class="inputbox">
                        <label for="password"><i class="fa fa-lock"></i></label>
                        <input type="password" id="password" placeholder="Password">
                    </div>

                    <input type="submit" value="login">
                </form>
                <p>Forgot password ?</p>
                <p>Don't Have account?<span> <a href="signup.php">SIGN UP</a> </span></p>
            </div>            
        </div>
    </section>

    <!-- Login section ends -->

    <!-- Scripts -->

    <script src="script.js"></script>
    
</body>

</html>
