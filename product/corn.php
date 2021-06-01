<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location: login/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Corn</title>
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
<!-- Akhir nav -->
    <section class="ml-5">
        <div class="title">
            <h1>How Is The Right Way To Plant Corn ?</h1>
        </div>
        <div class="padi1">
            <b><p>1. Soil Processing</p></b>
            <img src="img/padi1.jpg" alt="">
            <div class="cara1">
                <p>The preparation of the land for the cultivation of maize starts with cleaning the growing weeds. Soil cultivation is needed to produce a soil physical environment that is conducive to plant growth. In preparing land for planting corn,
                    it can be done in several ways, including conventional soil processing or what is commonly called perfect soil cultivation (OTS), and conservation soil processing.
                </p>
            </div>
        </div>
        <div class="padi2">
            <b><p>2. Selection of Superior Rice Seeds</p></b>
            <img src="img/padi2.jpg" alt="">
        </div>
        <div class="cara2">
            <p>Good corn seeds are those that: <br> 1) Clean Seeds From Mixed Weeds Or Other Plant Seeds. <br> 2) The Seeds Look Dry And Shiny. <br> 3) The seeds are normal size and not defective. and <br> 4) Fertile (filled and solid) or non-hollow seeds.
                <br> 5) The Seeds Come From A Clear Variety
            </p>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>