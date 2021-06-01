<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location: ../login/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Wheat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    
   
</head>

<body>
        <!-- nav -->
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand my-2" href="../index.php"><img src="img/logo.png" width="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="../index.php">Home</a>
                    <a class="nav-item nav-link" href="../login">Login</a>
                    <a class="nav-item nav-link"href="../sign-up">Sign Up</a>
                    <a class="nav-item nav-link" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
</nav>
<!-- Akhir Navbar -->
    <section class="ml-5">
        <div class="title">
            <h1>How Is The Right Way To Plant Wheat ?</h1>
        </div>
        <div class="padi1">
            <b><p>1. Soil Processing</p></b>
            <img src="img/padi1.jpg" alt="">
            <div class="cara1">
                <p>Soil processing for wheat is almost the same as for upland rice or other crops. If possible, cultivate the soil completely until it is loose. However, if there is previous cropping then minimum tillage can also be applied. It is better
                    if the land is made in the form of beds with a width of 2 cm and a length according to land conditions. The recommended distance between the beds is 50 cm.
                </p>
            </div>
        </div>
        <div class="padi2">
            <b><p>2. Selection of Superior Rice Seeds</p></b>
            <img src="img/padi2.jpg" alt="">
        </div>
        <div class="cara2">
            <p>Good wheat seeds are those that: <br> 1) Derive from ripe panicles on the main stem. <br> 2) Have a uniform shape and color. <br> 3) Free from pests and diseases. and <br> 4) Have a high and uniform weight. Wheat seeds that have a dormancy
                period that is not too long, namely 0 to 4 months. The seeds needed are 75-100 kg / ha with a tugal system. The varieties that are widely grown in Indonesia today are Dewata and Selayar.</p>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>