<?php
include './Db_Connection/route_config.php';
include './Db_Connection/Db_Connection.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  

</head>

<body>
   <?php include './Navigation/nav.php'; ?>

        <section class="car-info mb-4">

            <div class="row">
                <div class="row1">
                    <h1>Sell Your Car at Ease</h1>
                    <span>Are you looking to sell your car quickly and hassle-free?</span>
                    <p>Look no further! CarSell is the premier online car selling platform designed with you in mind.
                        Whether you're an individual seller or a dealership, our user-friendly platform makes selling
                        your car a breeze.</p>
                </div>
                <div class="row2">
                    <img src="./images/bb.jpg" alt="Car Image">
                </div>
            </div>
        </section>


        <section>
    <div class="container-fluid mt-5 mb-4">
        <h1 class="cars" style="text-align: center;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; margin-bottom:60px; margin-top:200px;">Cars for Sale</h1>
        <div class="row">
            <!-- First Card -->
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="./images/bb.jpg" alt="Car 1" style="width: 60%;" class="card-img-top mx-auto d-block h-100">
                    <div class="card-body">
                        <h5 class="card-title text-center">Car 1</h5> 
                        <p class="card-text text-center">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            itaque dolore ratione reiciendis cumque est nam at asperiores atque?
                            Aliquid, error maxime. Aliquam vitae quaerat deleniti quo! Cupiditate,
                            ullam ipsa.
                        </p>
                        <a href="#" class="btn btn-primary col-6 mx-auto d-block">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Second Card -->
            <div class="col-md-4">
                <div class="card h-100">
                <img src="./images/bmw.jpg" alt="Car 2" style="width: 60%;" class="card-img-top mx-auto d-block h-100">
                    <div class="card-body">
                        <h5 class="card-title text-center">Car 2</h5> 
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            itaque dolore ratione reiciendis cumque est nam at asperiores atque?
                            Aliquid, error maxime. Aliquam vitae quaerat deleniti quo! Cupiditate,
                            ullam ipsa.
                        </p>
                        <a href="#" class="btn btn-primary col-6 mx-auto d-block">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="col-md-4">
                <div class="card h-100">
                <img src="./images/cc.jpg" alt="Car 3" style="width: 60%;" class="card-img-top mx-auto d-block h-100">
                    <div class="card-body">
                        <h5 class="card-title text-center">Car 3</h5> 
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt
                            itaque dolore ratione reiciendis cumque est nam at asperiores atque?
                            Aliquid, error maxime. Aliquam vitae quaerat deleniti quo! Cupiditate,
                            ullam ipsa.
                        </p>
                        <a href="#" class="btn btn-primary col-6 mx-auto d-block">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


      <?php
      include './Navigation/footer.php';
      ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+CGs6b6A7x6iK6UcEd3a8tWgGvgpVC8F8CVB3W5p5yW4a2z" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-d7I10kLh1OLJvI1z2k2IsU08Yjr6VxLhz5CXP7pZKc9R5KVp5R1f1O7U5z04p3fr5" crossorigin="anonymous">
    </script> -->


</html>