<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

        $_SESSION['user_name'] = $row['name'];
        header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css">    

</head>
<body>

    <?php @include 'header.php'; ?>
    
    <div class="form-container">

        <form action="" method="post">
            <h3>Login now</h3>
            
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>            

            <input type="email" name="email" required placeholder="Enter your email"> <br>

            <input type="password" name="password" required placeholder="Enter your password">   <br>         

            <select name="user_type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select> <br>

            <input type="submit" name="submit" value="Login now" class="form-btn"> <br>

            <p>Don't have an account? Please <a href="register_form.php"> <b>Register now!</b></a></p>
        </form>

    </div>
</body>
</html>EEE