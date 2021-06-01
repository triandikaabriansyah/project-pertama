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
    <title>RICE</title>
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
            <h1>How Is The Right Way To Plant Rice?</h1>
        </div>
        <div class="padi1">
            <b><p>1. Soil Processing</p></b>
            <img src="img/padi1.jpg" alt="">
            <div class="cara1">
                <p>The way to plant rice starts from soil cultivation, in paddy fields make the land the most preferred medium for young rice plants (rice seeds), namely the soil texture is loose and the organic matter is high and the soil is free from fungal
                    colonies and pathogenic bacteria. So that the dulur's soil can be loose and the organic matter is high, the dulur can carry out the process of tillage by means of plowing / being contracted. Then before planting rice, apply GDM Black
                    BOS on the soil that is still wet.</p>
            </div>
        </div>
        <div class="padi2">
            <b><p>2. Selection of Superior Rice Seeds</p></b>
            <img src="img/padi2.jpg" alt="">
        </div>
        <div class="cara2">
            <p>Some things that must be done in selecting superior rice seeds are: <br>1. Select superior rice seeds that must be officially certified by government agencies or companies. This indicates that the feasibility of planting the rice seeds can
                be accounted for, such as their dormancy period and growth power. <br> 2. Make sure the seeds are not expired and have a growth power above 90%. <br> 3. Rice seeds are whole / pithy, clean and free from pests (lice / grain beetles). <br>                4. The seed purity level reaches up to 98%. <br> 5. Has high yield potential. <br> 6. Disease-resistant rice seeds. <br></p>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>