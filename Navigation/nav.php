<header>
<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span style="color: rgb(347, 189, 11);">Car</span>
                <span style="color: rgb(104, 202, 235);">Sell</span>
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-light " href="<?php echo $site_url .'index.php';?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo $site_url .'AboutUs/aboutus.php';?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo $site_url .'AddCar/addcar.php';?>">Add Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo $site_url .'Authentication/registration.php';?>">Seller Registration</a>
                    </li>
                    <li class="nav-item">
    <?php if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) : ?>
        <a class="nav-link text-light" href="<?php echo $site_url .'Authentication/login.php';?>">Seller Login</a>
        <?php else : ?>
            <span class="nav-link text-light">Welcome, <?php echo $_SESSION["username"]; ?></span>
    <?php endif; ?>
</li>

                </ul>
                <form class="d-flex mx-4">
                    <input class="form-control me-2 mx-4" type="search" placeholder="Search Here" id="search-input">
                    <a class="btn btn-outline-success" id="search-button">Search</a>
                </form>
            </div>
        </div>
    </nav>
    <script>
    document.getElementById('search-button').addEventListener('click', function (event) {
        event.preventDefault();
        var siteurl="http://localhost/CarSell/Cars/"

        var inputValue = document.getElementById('search-input').value;

        var url = siteurl+'cars.php?search=' + encodeURIComponent(inputValue);

        window.location.href = url;
    });
</script>
    

    </header>
    

