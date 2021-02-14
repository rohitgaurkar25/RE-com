<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agriculture Shopee</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<!-- start #header -->

<header id="header">
            <div class="strip d-flex justify-content-between px-4 py-1 " style="background-color: green;">
                <p class="font-rale font-size-12 text-black-50 m-0"><input type="text" placeholder="Search for products and more" style="width: 500%; margin-top: 10px;margin-left: 50px;"></p>
                <div class="font-rale font-size-14">
                  <a href="#"><button style=" margin-top: 10px;margin-left: 50px;">Search</button></a>
                  <a href="login/signlog.html" class="px-3 border-right border-left "><button class="btn" style="background-color: white; height: 30px; width: 100px;color:green; "><b>Login</b></button></a>
                  <a href="./index.php" class="px-3 border-right "><b style="color: white;">Home</b></a>
                  <a href="./cart.php" class="px-3 border-right "><b style="color: white;">Cart</b></a>
                </div>
            </div>

            <!-- Primary Navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:white;">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                      <a class="nav-link" href="#" style="color: black;">Fertilizer <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" style="color: black;">Pesticides <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" style="color: black;">Seeds <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black;">MoterPump <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black;">Shadenets <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black;">Mulching Shees <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black;">Spryers <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black;">Crop Srtings <i class="fas fa-chevron-down"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" style="color: black;">Offer Zone<i class="fas fa-chevron-down"></i></a>
                      </li>
                  </ul>
                  <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
                </div>
              </nav>
               <!-- !Primary Navigation -->

        </header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">