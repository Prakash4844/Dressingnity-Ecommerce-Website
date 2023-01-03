<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressingnity Products</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- RemixIcon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- DarkReader JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/darkreader@4.9.58/darkreader.min.js"></script>

    <!-- Styles.css -->
    <link rel="stylesheet" href="CSS/Styles.css">

    <link rel="stylesheet" href="CSS/products.css">
    <!-- Favicon -->
    <link rel="icon" href="Images/SVG Samples/Dressingnity recolor Logo.png">
</head>

<body>
    <!-- Navbar Starts -->
    <?php
        include('Partials/Navbar.php')
    ?>
    <!-- Navbar Ends -->

    <!-- banner -->
    <div class="banner2">
        <div class="content2">
            <h1>Get More Product</h1>
            <p>"THE SECRET OF GREAT STYLE IS TO FEEL GOOD IN WHAT YOU WEAR!"</p>
            <div id="bannerbtn2"><button>SHOP NOW</button></div>
        </div>
    </div>
    <!-- banner -->

    <!-- product cards -->
    <div class="container" id="product-cards">
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p1.png" alt="">
                    <div class="card-body">
                        <h3>Girls Heel</h3>
                        <p>Buy Black Heels online.</p>
                        <div class="star">

                        </div>
                        <h5>$12.3 <strike>$15.5</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p2.png" alt="">
                    <div class="card-body">
                        <h3>Men Hoodie</h3>
                        <p>Buy Men Hoodie online.</p>
                        <div class="star">

                        </div>
                        <h5>$3.2 <strike>$5.1</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p3.png" alt="">
                    <div class="card-body">
                        <h3>Smart Watch</h3>
                        <p>Buy Smart Watch.</p>
                        <div class="star">

                        </div>
                        <h5>$50.10 <strike>$60</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p4.png" alt="">
                    <div class="card-body">
                        <h3>Men T-Shirt</h3>
                        <p>Buy Men T-Shirt.</p>
                        <div class="star">

                        </div>
                        <h5>$10.5 <strike>$15</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p5.png" alt="">
                    <div class="card-body">
                        <h3>Hand Bag</h3>
                        <p>Buy Hand Bag.</p>
                        <div class="star">

                        </div>
                        <h5>$100.5 <strike>$120.30</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p6.png" alt="">
                    <div class="card-body">
                        <h3>Sport Shoes</h3>
                        <p>Buy Sport Shoes.</p>
                        <div class="star">

                        </div>
                        <h5>$32.50 <strike>$35.30</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p7.png" alt="">
                    <div class="card-body">
                        <h3>Girls Heel</h3>
                        <p>Buy Girls Heel.</p>
                        <div class="star">

                        </div>
                        <h5>$20.10 <strike>$30.20</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p8.png" alt="">
                    <div class="card-body">
                        <h3>Means Jeans</h3>
                        <p>Buy Means Jeans.</p>
                        <div class="star">

                        </div>
                        <h5>$65.50 <strike>$100</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p9.jpg" alt="">
                    <div class="card-body">
                        <h3>Dark Pant</h3>
                        <p>Buy Dark Pant Online.</p>
                        <div class="star">

                        </div>
                        <h5>$13.5 <strike>$15.10</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p10.jpg" alt="">
                    <div class="card-body">
                        <h3>Girls Juti</h3>
                        <p>Buy Girls juti.</p>
                        <div class="star">

                        </div>
                        <h5>$6.50 <strike>$10.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p11.jpg" alt="">
                    <div class="card-body">
                        <h3>Gray Hoodie</h3>
                        <p>Buy Gray Hoodie.</p>
                        <div class="star">

                        </div>
                        <h5>$10.5 <strike>$15.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/p12.jpg" alt="">
                    <div class="card-body">
                        <h3>Men Shirt</h3>
                        <p>Buy Men Shirt.</p>
                        <div class="star">

                        </div>
                        <h5>$5.1 <strike>$6.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/best_selling_1.jpg" alt="">
                    <div class="card-body">
                        <h3>Men Coat</h3>
                        <p>Buy Men coat.</p>
                        <div class="star">

                        </div>
                        <h5>$13.5 <strike>$15.10</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/best_selling_2.jpg" alt="">
                    <div class="card-body">
                        <h3>Coat</h3>
                        <p>Buy coat online.</p>
                        <div class="star">

                        </div>
                        <h5>$6.50 <strike>$10.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/best_selling_3.jpg" alt="">
                    <div class="card-body">
                        <h3>T-Shirt</h3>
                        <p>Buy T-Shirt Online.</p>
                        <div class="star">

                        </div>
                        <h5>$10.5 <strike>$15.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/best_selling_1.jpg" alt="">
                    <div class="card-body">
                        <h3>Men Coat</h3>
                        <p>Buy Men Coat.</p>
                        <div class="star">

                        </div>
                        <h5>$5.1 <strike>$6.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/c_undershirt.png" alt="">
                    <div class="card-body">
                        <h3>Girls Top</h3>
                        <p>Buy Girls Blue Top.</p>
                        <div class="star">

                        </div>
                        <h5>$13.5 <strike>$15.10</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/c_shirt-girl.png" alt="">
                    <div class="card-body">
                        <h3>Girls Top</h3>
                        <p>Buy Girls Top.</p>
                        <div class="star">
                        </div>
                        <h5>$6.50 <strike>$10.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/c_pant_girl.png" alt="">
                    <div class="card-body">
                        <h3>Girls Jeans</h3>
                        <p>But Girls Jeans.</p>
                        <div class="star">

                        </div>
                        <h5>$10.5 <strike>$15.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card">
                    <img src="Images/ProductPage/c_polo-shirt.png" alt="">
                    <div class="card-body">
                        <h3>Girls Top</h3>
                        <p>Buy Girls Top.</p>
                        <div class="star">

                        </div>
                        <h5>$5.1 <strike>$6.50</strike> <span><i class="fa-solid fa-cart-shopping"></i></span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product cards -->




    <!-- product -->
    <div class="container" style="margin-top: 100px;">
        <hr>
    </div>
    <div class="container">
        <h3 style="font-weight: bold;">PRODUCT.</h3>
        <p>Dressingnity is a start-up E-commerce establishment that will sell fashionable clothing to men, women, teens
            of the genZ generation. We will locate Dressingnity on Dressingnity.fr.gd, which is a
            Website
            Fashion destination for all. While our initial goal is to be affordable, expansion plans include
            potentially franchising our retail store and/or building a well-recognized brand name. In turn, we would
            hope to penetrate a sizable portion of the online E-commerce market.</p>

        <hr>
    </div>
    <!-- product -->


    <!-- offer -->
    <div class="container" id="offer">
        <div class="row text-center">
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-cart-shopping"></i>
                <h5>Free Shipping</h5>
                <p>On order over $100</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-truck"></i>
                <h5>Fast Delivery</h5>
                <p>World wide</p>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <i class="fa-solid fa-thumbs-up"></i>
                <h5>Big Choice</h5>
                <p>Of product</p>
            </div>
        </div>
    </div>
    <!-- offer -->

    <!-- Footer Starts -->
    <?php
        include('Partials/Footer.php')
    ?>
    <!--Footer Ends-->

    <!-- Cookie Banner -->
    <?php
        include('Partials/Cookies.php')
    ?>
    <!-- End of Cookie Banner -->

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS Bundle -->

    <!-- Custom JS -->
    <script src="JavaScript/Cookies.js"></script>
    <!-- Custom JS -->

    <!-- Darkmode-Toggle -->
    <script src="JavaScript/DarkModeToggle.js"></script>

</body>

</html>