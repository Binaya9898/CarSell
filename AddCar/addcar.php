<?php
session_start();
include '../Db_Connection/Db_Connection.php';
if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])){
    header("location:../Authentication/login.php");

}else{
    $seller_id=$_SESSION['id'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $make=$_POST["make"];
    $model=$_POST["model"];
    $year=$_POST["date"];
    $milage=$_POST["milage"];
    $location=$_POST["location"];
    $price=$_POST["price"];

    $sql = "INSERT INTO Car_Registration (SellerID, Make, Model, Year, Milage, Location, Price) VALUES ('$seller_id', '$make', '$model', '$year', '$milage', '$location', '$price')";
    $result=mysqli_query($conn,$sql);
    if($result){
        $message="Car Added Succesfully";
        $encmessage=base64_encode($message);
        header("location:../Success/success.php?message=$encmessage");
    }
    else{
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

            <img src="../images/aa.jpg" alt="" id="logo" style="margin-left: 100px; margin-top:100px">
        </div>
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Add Car</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, add your beautiful cars.</p>

            <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="form-control">
                    <input type="text" placeholder="Make" name="make">
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control" >
                    <input type="text" placeholder="Model" name="model">
                    <i class="fa fa-map-marker"></i>
                </div>

                <div class="form-control">
                    <input type="date" placeholder="Date" name="date">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="form-control">
                    <input type="number" placeholder="Milage" name="milage">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="form-control" >
                    <input type="text" placeholder="Location" name="location">
                    <i class="fa fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="number" placeholder="Price" name="price">
                    <i class="fas fa-lock"></i>
                </div>
                <button id="signupBtn" type="submit" class="submit"  name="submit">Add Car</button>
            </form>
        </div>
    </section>
    
</body>
</html>
