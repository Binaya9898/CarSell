<?php
include './Db_Connection/route_config.php';
include './Db_Connection/Db_Connection.php';
session_start();
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
<h1 style="text-align:center; margin-top:100px; text-decoration:underline">Available Cars</h1>

        <?php
$sql = "SELECT * FROM Car_Registration";

// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Check if there are any rows in the result
if (mysqli_num_rows($result) > 0) {
    // Start a container for horizontal scrolling
    echo '<div class="container-fluid mt-5 mb-4" style="overflow-x: auto;">';
    echo '<div class="row">';

    // Loop through the rows to display each car card
    while ($row = mysqli_fetch_assoc($result)) {
        // Generate a random image URL (replace this with your actual image URL logic)
        $randomImageUrl = "./images/aa.jpg";

        // Extract car data from the row
        $make = $row['Make'];
        $model = $row['Model'];
        $year = $row['Year'];
        $mileage = $row['Milage'];
        $location = $row['Location'];
        $price = $row['Price'];

        // Render the car card
        echo '<div class="col-md-4">';
        echo '<div class="card h-100">';
        echo '<img src="' . $randomImageUrl . '" alt="Car Image" style="width: 60%;" class="card-img-top mx-auto d-block h-100">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title text-center">' . $make . ' ' . $model . ' (' . $year . ')</h5>';
        echo '<p class="card-text">';
        echo 'Mileage: ' . $mileage . '<br>';
        echo 'Location: ' . $location . '<br>';
        echo 'Price: $' . $price;
        echo '</p>';
        echo '<a href="#" class="btn btn-primary col-6 mx-auto d-block">Learn More</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    // End the container
    echo '</div>';
    echo '</div>';
} else {
    echo 'No cars available.';
}

// Close the database connection
mysqli_close($conn);
?>

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