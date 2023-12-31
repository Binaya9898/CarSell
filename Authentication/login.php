<?php
session_start();
include '../Db_Connection/Db_Connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM Seller_Registration WHERE Username = '$username' AND Password = '$password'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['Username'];
            $_SESSION['password'] = $row['Password'];
            $_SESSION['id'] = $row['Id'];
            header("location:../index.php");
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo mysqli_error($conn);
    }
}
?>



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
                    <input type="text" placeholder="Username" name="username">
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
