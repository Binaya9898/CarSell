<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../CSS/login-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>CarSell || Seller-login ||</title>
</head>
<body>
    <section class="side">
        <div class="logo-container">

            <img src="../images/logo.png" alt="" id="logo">
        </div>
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Welcome Back !!</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide login credential to sign in</p>

            <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-control">
                    <input type="text" placeholder="Email" name="email">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password">
                    <i class="fas fa-lock"></i>
                </div>
                <p style="padding-left:120px;"><a href="forgotPassword.php" style="text-decoration:none;">Forgot Password ?</a></p>

                <button class="submit">Login</button>
            </form>
        </div>
    </section>
    
</body>
</html>
