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
    z-index: -1;
   
}
.abt h1{
    padding-top: 18rem;
    /* margin-top: 25rem; */
    padding-left: 50rem;

    font-size: 100px;
    font-weight: 700;
    color: black;
}
.abt h1:hover{
    color: red ;
    /* transform: scale(-1); */
}
.row img{
    height: 40vh;
    
    
    width:450px;
}

#row2{
    background-image: url("https://images.pexels.com/photos/1843717/pexels-photo-1843717.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
}

#row1{
    background-image: url("https://images.pexels.com/photos/3847486/pexels-photo-3847486.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
}

#row3{
    background-image: url("https://images.pexels.com/photos/3847486/pexels-photo-3847486.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
}

</style>
</head>
<body>
    <section>

        <?php include '../Navigation/nav.php'; ?>
    </section>
<section>
<div  class="abt mb-0">
<h1>About Us</h1>
</div>

</section>
<section>
    <div class="container-fluid mt-5">
    <div class="row">

        <div class="row col-6" id="row2">
        <h1>What we do?</h1>
        <p style="text-align: justify;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit mollitia,
             tempora quisquam repellat tenetur maiores dolor. Error suscipit esse odit, dolores, iure 
             laboriosam quas maxime recusandae perspiciatis officia deserunt. Rerum.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit mollitia,
             tempora quisquam repellat tenetur maiores dolor. Error suscipit esse odit, dolores, iure 
             laboriosam quas maxime recusandae perspiciatis officia deserunt. Rerum.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit mollitia,
             tempora quisquam repellat tenetur maiores dolor. Error suscipit esse odit, dolores, iure 
             laboriosam quas maxime recusandae perspiciatis officia deserunt. Rerum.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit mollitia,
             tempora quisquam repellat tenetur maiores dolor. Error suscipit esse odit, dolores, iure 
             laboriosam quas maxime recusandae perspiciatis officia deserunt. Rerum.
        </p>
        </div>
            
            <div class="row col-4">
            <img src="https://images.pexels.com/photos/97079/pexels-photo-97079.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" srcset="">

        </div>
        </div>
     
    </div>
</section>


<section>
    <div class="container-fluid mt-5">
        <div class="row">
            
            <div class="row col-4">
                <img src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" srcset="">

        </div>
        <div class="row col-6" id="row1">
        <h1>How we Started?</h1>
        <p style="text-align: justify;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit mollitia,
             tempora quisquam repellat tenetur maiores dolor. Error suscipit esse odit, dolores, iure 
             laboriosam quas maxime recusandae perspiciatis officia deserunt. Rerum.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit mollitia,
             tempora quisquam repellat tenetur maiores dolor. Error suscipit esse odit, dolores, iure 
             laboriosam quas maxime recusandae perspiciatis officia deserunt. Rerum.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit mollitia,
             tempora quisquam repellat tenetur maiores dolor. Error suscipit esse odit, dolores, iure 
             laboriosam quas maxime recusandae perspiciatis officia deserunt. Rerum.  Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit mollitia,
             tempora quisquam repellat tenetur maiores dolor. Error suscipit esse odit, dolores, iure 
             laboriosam quas maxime recusandae perspiciatis officia deserunt. Rerum.
        </p>
        </div>
        </div>
     
    </div>
</section>

<section>
    <div class="container-fluid mb-4">
        <div class="row mt-5">
            <div class="row col-1">

            </div>

            <div class="row col-5" id="row3">
                <div class="container-fluid">
               <h2 style="margin-top:200px;margin-left:100px; font-weight:800; font-family:sans-serif">

                   Find us on Map!!
               </h2>
                </div>

            </div>
            <div class="row col-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.0280335462407!2d151.20319411135492!3d-33.837387673127004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12af45d556cbfb%3A0x68c378a3f2119946!2sCrown%20Institute%20of%20Higher%20Education!5e0!3m2!1sen!2snp!4v1696508080515!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>
</section>


<section>

    <?php include '../Navigation/footer.php'; ?>
</section>

</body>
</html>