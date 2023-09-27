<?php
// include './Db_Connection/Db_connection.php';
include '../Db_Connection/route_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    .abt {
    background-image: url(https://images.pexels.com/photos/14836357/pexels-photo-14836357.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    min-width: 100%;
    height: 100vh;
    min-height: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scaleX(1);
    z-index: -1;
    margin-top: 15rem;
}
</style>
</head>
<body>
    <section>

        <?php include '../Navigation/nav.php'; ?>
    </section>
<section>
<div  class="abt">
    <div class="container background-dark">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dolorem officia id sit minima cupiditate facere ratione omnis delectus consequuntur eius eveniet doloribus, totam illo laudantium a provident eos! Officiis!
    </div>
</div>

</section>
<section>

    <?php include '../Navigation/footer.php'; ?>
</section>

</body>
</html>