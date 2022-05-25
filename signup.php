<!DOCTYPE html>
<html lang="en">

<head>    
    <title> sign up</title>

    <!-- font cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php @include 'header.php'; ?>   
    
    <!-- sign up section satrts -->

    <section class="signup" id="signup">
        <div class="container">            
            <div class="Signup">
                <h2>signup</h2>
                <form>
                    <div class="inputbox">
                        <label for="email"><i class="fa fa-email"></i></label>
                        <input type="email" id="email" placeholder="Your email">
                    </div>

                    <div class="inputbox">
                        <label for="email"><i class="fa fa-user"></i></label>
                        <input type="email" id="email" placeholder="Choose Username">
                    </div>

                    <div class="inputbox">
                        <label for="password"><i class="fa fa-lock"></i></label>
                        <input type="password" id="password" placeholder="Password">
                    </div>

                    <input type="submit" value="signup">
                </form>
                <p>Reset Password</p>
                <p>Already have an  account?<span> Please login</span></p>
            </div>            
        </div>
    </section>

    <!-- Login section ends -->

    <!-- Scripts -->

    <script src="script.js"></script>
    
</body>

</html>