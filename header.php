<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Success Inc E-Commerce Website</title>
<!--Custom Css-->
<link rel="stylesheet" href="style/style.css"/>
<!--Custom Css-->
<!--Bootstrap Cdn-->
<link href="style/bootstrap.min.css" rel="stylesheet"/>
<script src="javascript/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<!--Bootstrap Cdn-->
<!--Font Awesome Cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<!--Font Awesome Cdn-->
<!--Scroll reveal Cdn-->
<script src="https://unpkg.com/scrollreveal"> </script>
<!--Scroll Reveal Cdn-->
<!--Owl-carousel-->
<link rel="stylesheet" href="style/owl.carousel.min.css">
<link rel="stylesheet" href="style/owl.theme.default.min.css">
<!--Owl Carousel-->
<?php
//require functions.php file
require('functions.php');

?>
</head>
<body>
    <!--start header--> 
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="text-black-50 m-0">This Website was Created By <span class="text-danger">U</span>ltra <span class="text-primary">S</span>uccess</p>
            <div>
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right border-left text-dark">Whishlist(<?php  echo count($product->getData('wishlist')); ?>)</a>
            </div>
        </div>

    <!--start header-->
    <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                  <a class="navbar-brand text-dark" href="#"><span class="text-danger">U</span>ltra <span class="text-primary">S</span>uccess</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#top">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">What is <span class="text-danger">U</span>ltra <span class="text-primary">S</span>uccess?</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Content</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#services">Services We Provide</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#projects">On Sale</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#category">Category <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#products">Products <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#blog">Coming Soon</a>
                      </li>
                    </ul>
                    <form action="#" style="font-size: 14px;">
                       <a href="Cart.php" class="py-2 rounded-pill" style="background-color:#003859;">
                        <span class="px-2 text-white" style="font-size: 16px;"><img src="images/ruby.png"></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php  echo count($product->getData('cart')); ?></span>
                       </a>
                    </form>
                  </div>
                </div>
              </nav>
    </header>
</section>
    <!--Header Ends-->

    <!--Main Section-->
    <main id="main-site">