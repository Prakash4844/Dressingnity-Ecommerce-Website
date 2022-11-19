<!DOCTYPE html>
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
    <!-- Styles.css -->
    <link rel="stylesheet" href="CSS/Styles.css">

    <!-- Favicon -->
    <link rel="icon" href="Images/Fevicon/Dressingnity SVG.png">
</head>

<body>
    <!-- Navbar Starts -->
    <?php
        include('Partials/Navbar.html')
    ?>
    <!-- Navbar Ends -->  


       <!-- ******************************************************************************************************************************* -->

    <!-- header -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="Images/HomePage/sliderimg1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>First slide label</h1>
              <p class="fs-5">Some representative placeholder content for the first slide. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit distinctio perferendis magni aut, tempora temporibus.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="Images/HomePage/wallpepergirls.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Second slide label</h1>
              <p class="fs-5">Some representative placeholder content for the second slide. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit distinctio perferendis magni aut, tempora temporibus.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/HomePage/sliderimg3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Third slide label</h1>
              <p class="fs-5">Some representative placeholder content for the third slide. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit distinctio perferendis magni aut, tempora temporibus.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- end of header -->


    <!-- collection -->
    <section id="collection" class="py-5">
        <div class="container">
            <div class="title text-center">
                <h2 class="position-relative d-inline-block">New Collection</h2>
            </div>

            <div class="row g-0">
                <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group collection-btn">
                    <button type="button" class="btn m-2 text-dark  active-filter-btn" data-filter="*"><a class="fs-4 " href = "#collection" class = "btn   mt-3">All</a></button>
                    <button type="button" class="btn m-2 text-dark " data-filter=".best"><a class="fs-4 " href = "#special" class = "btn   mt-3">Female Section</a></button>
                    <button type="button" class="btn m-2 text-dark " data-filter=".feat"><a class="fs-4 " href = "#special-m" class = "btn   mt-3">Male Section</a></button>
                    <button type="button" class="btn m-2 text-dark " data-filter=".new"><a class="fs-4 " href = "#popular" class = "btn   mt-3">Products</a></button>
                </div>

                <div class="collection-list mt-4 row gx-0 gy-3">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class="collection-img position-relative">
                            <p><a href="Products.php"><img
                                        src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                                        class="w-100 alt=""></a></p>
                            </div>
                            <div class = " text-center">
                                    
                                    <p class="text-capitalize my-1">gray shirt</p>
                                    <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class="collection-img position-relative">
                            <p><a href="Products.php"><img
                                        src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                                        class="w-100 alt=""></a></p>
                               
                        </div>
                        <div class="text-center">
                            
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class="collection-img position-relative">
                            <p><a href="Products.php"><img
                                        src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                                        class="w-100 alt=""></a></p>
                              
                        </div>
                        <div class="text-center">
                        
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3  p-2 best">
                        <div class="collection-img position-relative">
                            <p><a href="Products.php"><img
                                        src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                                        class="w-100 alt=""></a></p>
                               
                        </div>
                        <div class="text-center">
                           
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class="collection-img position-relative">
                            <p><a href="Products.php"><img
                                        src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                                        class="w-100 alt=""></a></p>
                               
                        </div>
                        <div class="text-center">
                            
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class="collection-img position-relative">
                            <p><a href="Products.php"><img
                                        src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                                        class="w-100 alt=""></a></p>
                                
                        </div>
                        <div class="text-center">
                           
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3  p-2 best">
                        <div class="collection-img position-relative">
                            <p><a href="Products.php"><img
                                        src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                                        class="w-100 alt=""  ></a></p>
                               
                        </div>
                        <div class="text-center">
                        
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3  p-2 feat">
                        <div class="collection-img position-relative">
                            <p><a href="Products.php">
                                <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                                        class="w-100 alt=""></a></p>
                             
                        </div>
                        <div class="text-center">
                            <p class="text-capitalize my-1">gray shirt</p>
                            <span class="fw-bold">$ 45.50</span>
                        </div>
                    </div>
                    <!-- <a href="Products.html"><button type="button"  class="btn  ">Products</button></a>  -->
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->


     <!-- special products Female-->
     <section id = "special" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block">Female Collection</h2>
            </div>

            <div class = "special-list row g-0">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70" class = "w-100">
                          
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-add rounded-3 text-white mt-3"> Cart </a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70" class = "w-100">
                          
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-add rounded-3 text-white  mt-3"> Cart </a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70" class = "w-100">
                          
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-add rounded-3 text-white  mt-3"> Cart </a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70" class = "w-100">
                          
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-add rounded-3 text-white  mt-3"> Cart </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of special products -->


     
 <!-- special products  Male-->
 <section id = "special-m" class = "py-5">
    <div class = "container">
        <div class = "title text-center py-5">
            <h2 class = "position-relative d-inline-block">Male Collection</h2>
        </div>

        <div class = "special-list row g-0">
            <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <div class = "special-img position-relative overflow-hidden">
                    <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70" class = "w-100">
                       
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                    <span class = "fw-bold d-block">$ 45.50</span>
                    <a href = "#" class = "btn btn-add rounded-3 text-white  mt-3"> Cart </a>
                </div>
            </div>

            <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <div class = "special-img position-relative overflow-hidden">
                    <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70" class = "w-100">
                       
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                    <span class = "fw-bold d-block">$ 45.50</span>
                    <a href = "#" class = "btn btn-add rounded-3 text-white  mt-3"> Cart </a>
                </div>
            </div>

            <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <div class = "special-img position-relative overflow-hidden">
                    <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70" class = "w-100">
                       
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                    <span class = "fw-bold d-block">$ 45.50</span>
                    <a href = "#" class = "btn btn-add rounded-3 text-white  mt-3"> Cart </a>
                </div>
            </div>

            <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <div class = "special-img position-relative overflow-hidden">
                    <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70" class = "w-100">
                       
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                    <span class = "fw-bold d-block">$ 45.50</span>
                    <a href = "#" class = "btn btn-add rounded-3 text-white  mt-3"> Cart </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of special products -->


 <!-- Testimonials start-->

 <section id="testimonials">
    <div id="testimonial-carousel" class="carousel slide" data-ride="false" >
      <div class="carousel-inner">
        
        
            <div class="carousel-item active" >
              <h2>I no longer have to sniff other cats for love. I've found the hottest Corgi on TinCat. Woof.</h2>
              <img class="testimonial-image" src="Images/HomePage/testimon1.jpeg" alt="dog-profile">
              <em>Pebbles, New York</em>
            </div>

            <div class="carousel-item ">
              <h2 class="testimonial-text">My cat used to be so lonely , but with TinCat's help, they've found the rhfy grbgry rtrgtg</h2>
              <img class="testimonial-image" src="Images/HomePage/testimon2.jpg" alt="lady">
              <em>Beverly, Illinois</em>
            </div>
       
      </div>
         <button class="carousel-control-prev" type="button"  data-bs-target="#testimonial-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
     </button>

    </div>


  </section>


  <!-- Press -->

  <section id="press">
    <img class="press-logo" src="Images/HomePage/test6.png" alt="tc-logo">
    <img class="press-logo" src="Images/HomePage/test2.png" alt="tnw-logo">
    <img class="press-logo" src="Images/HomePage/test3.png" alt="biz-insider-logo">
    <img class="press-logo" src="Images/HomePage/test4 (2).png" alt="mashable-logo">

  </section> 
  <!-- press end -->

<!-- Testimonials End -->


    <!-- blogs -->
    <section id = "offers" class = "py-5">
        <div class = "container">
            <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class = "offers-content">
                    <span class = "text-black">Discount Up To 15%</span>
                    <h2 class = "mt-2 mb-4 text-black">Grand Sale Offer!</h2>
                    <a href = "#" class = "btn btn-warning">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end of blogs -->

    <!-- popular  products -->
    <section id="popular" class="py-5">
        <div class="container">
            <div class="title text-center pt-3 pb-5">
                <h2 class="position-relative d-inline-block ms-4">Products</h2>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 col-md-12 row g-3 ">
                    <h3 class="fs-5 popular-type">Top Rated</h3>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Sundress</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Shirtdress</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Cardign</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-md-12 row g-3">
                    <h3 class="fs-5 popular-type">Best Selling</h3>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Trousers</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Coat</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Shift Dress</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-md-12 row g-3">
                    <h3 class="fs-5 popular-type">On Sale</h3>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">T-shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Regular Jacket</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="https://rukminim1.flixcart.com/image/832/832/shirt/k/h/n/bfgreysht02-being-fab-40-original-imaecvnxyxg44vre.jpeg?q=70"
                            alt="" class="img-fluid pe-3 w-25">
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
        include('Partials/Footer.html')
    ?>
    <!--Footer Ends-->

    <!-- Cookie Banner -->
    <?php
    include('Partials/Cookies.html')
    ?>
    <!-- End of Cookie Banner -->

    <!-- Custom JS -->
    <script src="JavaScript/Cookies.js"></script>
    <!-- Custom JS -->
</body>

</html>