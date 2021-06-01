<?php
require '../functions.php';
if(isset($_POST["register"])){
	if(registrasi($_POST) >
0){ echo "
<script>
  alert('User baru berhasil ditambahkan');
  window.location.replace('../login/index.php');
</script>
"; }else{ echo mysqli_error($conn); } } 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Sign UP</title>

    <style>
        body{
            margin:0;
            padding:0;
            overflow-x: hidden;
            font-family: arial;
        }
        .navbar{
          background-color: #20c997;
        }
        .btn{
          background-color:#20c997;
          color:white;
        }
    </style>

  </head>
  <body>

  <div class="row">
    <div class="col-lg-6">  
         <!-- Image and text nav-->
         <nav class="navbar navbar-dark p-5">
        <a class="navbar-brand" href="../index.php">
            <img src="img/logo.png" width="60" height="60" alt="">
            Tanam
            <h1>Tanam</h1>
            <h2>Welcome!</h2>  
            <p>Please create an account to login</p>        
        </a>        
        </nav>                                              
    <div class="col-lg-12">
        <h1 style=" color:#20c997;" class="font-weight-bold mt-2">Please Create Your Account</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" Required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" Required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password" Required>
            </div>
            <button type="submit" class="btn" name="register">Sign Up</button>
        </form>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>