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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanam</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">        
    <style>
        .jumbotron {
            background-image: url(img/background-home.png);
            background-size: cover;
            height: 580px;
        }
        .jumbotron h1 {
            color: white;
            text-align: left;
            margin-top: 100px;
            font-weight: bold;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
            font-size: 60px;
        }

        .jumbotron p {
            color: white;
            text-align: left;
            font-weight: 100;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
            font-size: 20px;
        }

        .jumbotron span {
            font-weight: 500;
        }
        .judul{
            color: #676E72;
        }
        .about-text h1{
            color: #20c997;
            margin-top: 120px;    
        }
        .btn{
            background-color:#20c997;
            color:white;
        }
        .gallery {
            width: 620px;
            margin: 10px auto;
            border: 5px solid white;
            overflow: auto;
        }

        .jumbo {
            width: 600px;
        }

        .thumb {
            width: 200px;
            height: 150px;
            float: left;
            border: 2px solid white;
            box-sizing: border-box;
        }

        .thumb:hover {
            opacity: 0.5;
            cursor: pointer;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        .fade {
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }

        .active {
            opacity: 0.5;
        }
        footer {            
            width: 100%;
            height: 50px;
            background-color:#20c997;
        }

        footer p {
            margin-top: 20px;
            margin-left: 50px;
            color: white;
            font-size: 18px;
        }
    </style>
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
                    <a class="nav-item nav-link" href="#about">About us</a>
                    <a class="nav-item nav-link" href="#product">Products</a>
                    <a class="nav-item nav-link" href="#gallery">Gallery</a>
                    <a class="nav-item nav-link" href="login">Login</a>
                    <a class="nav-item nav-link"href="sign-up">Sign Up</a>
                    <a class="nav-item nav-link" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
</nav>
<!-- Akhir Navbar -->

    <!-- Home -->
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1>We Believe in<br> <span>Sustainability</span></h1><br>
        <p>Agricultural education program we provide  <br>information from our community</p>
    </div>
    </div>
    <!-- Akhir Home -->
    <!-- About -->
    <div class="container" id="about">
    <div class="row">
        <div class="col-sm-12 text-center text-dark">
            <b><p class="judul">About Us</p></b>
            <hr width="4%" color="#676E72">
        </div>
        <div class="col-md-6 about-text">
        <h1 class="text-teal">Helping you Improve farming <br> practices in all sectors</h1>
        <p class="mt-3">Provides information on how to farm properly</p>
        </div>
        <div class="col-md-6">
        <img src="img/gambar2.png" alt="" class="mt-5">
        </div>
    </div>
    </div>
    <!-- akhir about -->
    <!-- product -->
    <div class="col-sm-12 text-center text-dark" id="product">
            <b><p class="judul mt-5">Product</p></b>
            <hr width="4%" color="#676E72">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm bg-white">
            <img src="img/padi2.png" alt="">          
            <h3>Rice</h3>
            <small>Learn the basics of how to plant rice</small>
            <br>
            <a href="product/rice.php" class="btn my-3">LEARN MORE</a>
            </div>
            <div class="col-sm bg-white">
            <img src="img/gandum.png" alt="">
            <h3>Wheat</h3>
            <small>Learn the basics of how to plant whaet</small>
            <br>
            <a href="product/wheat.php" class="btn my-3">LEARN MORE</a>
            </div>
            <div class="col-sm bg-white">
            <img src="img/jagung.png" alt="">
            <h3>Corn</h3>
            <small>Learn the basics of how to plant corn</small>
            <br>
            <a href="product/corn.php" class="btn my-3">LEARN MORE</a>
            </div>
        </div>
    </div>
    <!-- akhir produk -->
    <!-- Gallery -->
    <div class="container mt-5" id="gallery">
        <div class="row">
            <div class="col-sm-12 text-center text-dark">
                    <b><p class="judul mt-5">Gallery</p></b>
                    <hr width="4%" color="#676E72">
            </div>
            <div class="col-sm-12 text-center text-dark">
                <div class="gallery mb-5">
                <img src="img/gambar.jpg" class="jumbo">
                <div class="thumbnail">
                    <img src="img/gambar.jpg" class="thumb">
                    <img src="img/gambar1.jpg" class="thumb">
                    <img src="img/gambar3.jpg" class="thumb">
                    <img src="img/gambar5.jpg" class="thumb">
                    <img src="img/gambar6.jpg" class="thumb">
                    <img src="img/gambar7.jpg" class="thumb">
                </div>
            </div>
            </div>    
        </div>
    </div>
    <!-- Akhir Gallery -->
    <!-- Footer -->
    <footer class="d-flex align-items-center">
    <p>CopyRight @ Tanam 2021</p>
    </footer>
    <!-- Akhir footer -->
       
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
const gallery = document.querySelector('.gallery');
const jumbo = document.querySelector('.jumbo');
const thumbs = document.querySelectorAll('.thumb');

gallery.addEventListener('click', function(e) {
    if (e.target.className === 'thumb') {
        jumbo.src = e.target.src;
        jumbo.classList.add('fade');
        setTimeout(function() {
            jumbo.classList.remove('fade');
        }, 500);

        thumbs.forEach(function(thumb) {
            if (thumb.classList.contains('active')) {
                thumb.classList.remove('active');
            }
        })
        e.target.classList.add('active');

    }
});
</script>

</html>