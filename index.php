<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressingnity Home page</title>

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

    <!-- Favicon -->
    <link rel="icon" href="Images/Fevicon/Dressingnity SVG.png">
</head>

<body>
    <!-- Navbar Starts -->
    <?php
        include('Partials/Navbar.php')
    ?>

    <!-- Navbar Ends -->


    <!-- ******************************************************************************************************************************* -->

    <!-- Header Starts -->
    <section id="head-sec">
        <h4>Trade-in-offer</h4>
        <h2>Super value deal</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 15% off!</p>
        <a href="#" class="btn btn-warning">Shop Now</a>

    </section>


    <!-- Header Ends -->



    <!-- collection -->
    <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">New Collection</h2>
            </div>

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type="button" class="btn m-2 text-dark ">All</button>
                    <button type="button" class="btn m-2 text-dark">Best Sellers</button>
                    <button type="button" class="btn m-2 text-dark">Featured</button>
                    <button type="button" class="btn m-2 text-dark">New Arrival</button>
                </div>

                <div class="collection-list mt-4 row gx-0 gy-3">
                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class="collection-img position-relative">
                            <img src="Images/HomePage/c_formal_gray_shirt.png" class="rounded-3 w-100">

                        </div>
                        <div class="text-center">

                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class="collection-img position-relative">
                            <img src="Images/HomePage/c_pant_girl.png" class="rounded-3 w-100">

                        </div>
                        <div class="text-center">

                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class="collection-img position-relative">
                            <img src="Images/HomePage/c_polo-shirt.png" class="rounded-3 w-100">

                        </div>
                        <div class="text-center">

                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class="collection-img position-relative">
                            <img src="Images/HomePage/c_shirt-girl.png" class="rounded-3 w-100">

                        </div>
                        <div class="text-center">

                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class="collection-img position-relative">
                            <img src="Images/HomePage/c_t-shirt_men.png" class="rounded-3 w-100">

                        </div>
                        <div class="text-center">

                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class="collection-img position-relative">
                            <img src="Images/HomePage/c_tunic-shirt_girl.png" class="rounded-3 w-100">

                        </div>
                        <div class="text-center">

                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class="collection-img position-relative">
                            <img src="Images/HomePage/c_undershirt.png" class="rounded-3 w-100">

                        </div>
                        <div class="text-center">

                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class="collection-img position-relative">
                            <img src="Images/HomePage/c_western-shirt.png" class="rounded-3 w-100">

                        </div>
                        <div class="text-center">

                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->


    <!-- special products Female-->
    <section id="special" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block">Male Collection</h2>
            </div>

            <div class="special-list row g-0">
                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/best_selling_1.jpg" class="rounded-3  w-100">

                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-add rounded-3  text-black mt-3"> Cart </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/best_selling_2.jpg" class="rounded-3 w-100">

                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/best_selling_3.jpg" class="rounded-3 w-100">

                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/best_selling_2.jpg" class="rounded-3 w-100">

                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of special products -->



    <!-- special products  Male-->
    <section id="special-m" class="py-5">
        <div class="container">
            <div class="title text-center py-5">
                <h2 class="position-relative d-inline-block">Female Collection</h2>
            </div>

            <div class="special-list row g-0">
                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/special_product_1.jpg" class="rounded-3 w-100">

                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/special_product_2.jpg" class="rounded-3 w-100">

                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/special_product_3.jpg" class="rounded-3 w-100">

                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class="special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/special_product_4.jpg" class="rounded-3 w-100">

                    </div>
                    <div class="text-center">
                        <p class="text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class="fw-bold d-block">$ 45.50</span>
                        <a href="#" class="btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of special products -->



    <!-- Testimonials start-->

    <section id="testimonials">
        <div id="testimonial-carousel" class="carousel slide" data-ride="false">
            <div class="carousel-inner">


                <div class="carousel-item active">
                    <h2>I no longer have to sniff other cats for love. Woof.</h2>

                    <em>Pebbles, New York</em>
                </div>

                <div class="carousel-item ">
                    <h2 class="testimonial-text">My cat ,they've found the rhfy grbgry rtrgtg</h2>

                    <em>Beverly, Illinois</em>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>


    </section>


    <!-- Press -->

    <section id="press">
        <img class="press-logo" src="Images/HomePage/guccci.png" alt="tc-logo">
        <img class="press-logo" src="Images/HomePage/chenel.png" alt="tnw-logo">
        <img class="press-logo" src="Images/HomePage/Burberry-Logo.png" alt="biz-insider-logo">
        <img class="press-logo" src="Images/HomePage/raymond.png" alt="mashable-logo">

    </section>
    <!-- press end -->

    <!-- Testimonials End -->

    <!-- banner -->
    <div class="banner">
        <div class="content">
            <h1>Get Up To 50% Off</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, animi?</p>
            <div id="bannerbtn"><button>SHOP NOW</button></div>
        </div>
    </div>
    <!-- banner -->


    <!-- popular  products -->
    <section id="popular " class="py-5">
        <div class="container ">
            <div class="title text-center pt-3 pb-5">
                <h2 class="position-relative d-inline-block ms-4 ">Products</h2>
            </div>

            <div class="row text-center">
                <div class="col-md-6 col-lg-4 col-md-12 row g-3 ">
                    <h3 class="fs-5 popular-type">Top Rated</h3>
                    <div class="d-flex align-items-start justify-content-center popular-product">
                        <img src="Images/HomePage/on_sale_1.jpg" alt="" class="img-fluid pe-3 w-25 rounded-3">
                        <div>
                            <p class="mb-0">Sundress</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-center popular-product">
                        <img src="Images/HomePage/on_sale_2.jpg" alt="" class="img-fluid pe-3 w-25 rounded-3">
                        <div>
                            <p class="mb-0">Shirtdress</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-center popular-product">
                        <img src="Images/HomePage/on_sale_3.jpg" alt="" class="img-fluid pe-3 w-25 rounded-3">
                        <div>
                            <p class="mb-0">Cardign-X</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-md-12 row g-3">
                    <h3 class="fs-5 popular-type">Best Selling</h3>
                    <div class="d-flex align-items-start justify-content-center popular-product">
                        <img src="Images/HomePage/top_rated_1.jpg" alt="" class="img-fluid pe-3 w-25 rounded-3">
                        <div>
                            <p class="mb-0">Trousers</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-center popular-product">
                        <img src="Images/HomePage/top_rated_2.jpg" alt="" class="img-fluid pe-3 w-25 rounded-3">
                        <div>
                            <p class="mb-0">Coat</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-center popular-product">
                        <img src="Images/HomePage/top_rated_3.jpg" alt="" class="img-fluid pe-3 w-25 rounded-3">
                        <div>
                            <p class="mb-0">Dress</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-md-12 row g-3">
                    <h3 class="fs-5 popular-type">On Sale</h3>
                    <div class="d-flex align-items-start justify-content-center popular-product">
                        <img src="Images/HomePage/top_rated_3.jpg" alt="" class="img-fluid pe-3 w-25 rounded-3">
                        <div>
                            <p class="mb-0">T-shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-center popular-product">
                        <img src="Images/HomePage/on_sale_2.jpg" alt="" class="img-fluid pe-3 w-25 rounded-3">
                        <div>
                            <p class="mb-0">Jacket</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-center popular-product">
                        <img src="Images/HomePage/top_rated_1.jpg" alt="" class="img-fluid pe-3 w-25 rounded-3">
                        <div>
                            <p class="mb-0">Sari</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of popular products-->

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