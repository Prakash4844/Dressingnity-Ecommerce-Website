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

    <!-- header -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="Images/HomePage/sliderimg1-1920x1080.jpg" class="d-block rounded-3 w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>First slide label</h1>
              <p class="fs-5">Some representative placeholder content for the first slide. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit distinctio perferendis magni aut, tempora temporibus.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="Images/HomePage/sliderimg2-1920x1080.jpg" class="d-block rounded-3 w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1>Second slide label</h1>
              <p class="fs-5">Some representative placeholder content for the second slide. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit distinctio perferendis magni aut, tempora temporibus.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="Images/HomePage/sliderimg3-1920x1080.jpg" class="d-block rounded-3 w-100" alt="...">
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
   <section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center">
                <h2 class = "position-relative d-inline-block">New Collection</h2>
            </div>

            <div class = "row g-0">
                <div class = "d-flex flex-wrap justify-content-center mt-5 filter-button-group">
                    <button type = "button" class = "btn m-2 text-dark " >All</button>
                    <button type = "button" class = "btn m-2 text-dark" >Best Sellers</button>
                    <button type = "button" class = "btn m-2 text-dark" >Featured</button>
                    <button type = "button" class = "btn m-2 text-dark" >New Arrival</button>
                </div>

                <div class = "collection-list mt-4 row gx-0 gy-3">
                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "Images/HomePage/c_formal_gray_shirt.png" class = "rounded-3 w-100">
                            
                        </div>
                        <div class = "text-center">
                          
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "Images/HomePage/c_pant_girl.png" class = "rounded-3 w-100">
                            
                        </div>
                        <div class = "text-center">
                          
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <img src = "Images/HomePage/c_polo-shirt.png" class = "rounded-3 w-100">
                            
                        </div>
                        <div class = "text-center">
                          
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "Images/HomePage/c_shirt-girl.png" class = "rounded-3 w-100">
                            
                        </div>
                        <div class = "text-center">
                          
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "Images/HomePage/c_t-shirt_men.png" class = "rounded-3 w-100">
                            
                        </div>
                        <div class = "text-center">
                          
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 new">
                        <div class = "collection-img position-relative">
                            <img src = "Images/HomePage/c_tunic-shirt_girl.png" class = "rounded-3 w-100">
                            
                        </div>
                        <div class = "text-center">
                          
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 best">
                        <div class = "collection-img position-relative">
                            <img src = "Images/HomePage/c_undershirt.png" class = "rounded-3 w-100">
                            
                        </div>
                        <div class = "text-center">
                          
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span>
                        </div>
                    </div>

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2 feat">
                        <div class = "collection-img position-relative">
                            <img src = "Images/HomePage/c_western-shirt.png" class = "rounded-3 w-100">
                            
                        </div>
                        <div class = "text-center">
                          
                            <p class = "text-capitalize my-1">gray shirt</p>
                            <span class = "fw-bold">$ 45.50</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of collection -->


     <!-- special products Female-->
     <section id = "special" class = "py-5">
        <div class = "container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block">Male Collection</h2>
            </div>

            <div class = "special-list row g-0">
                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/best_selling_1.jpg" class = "rounded-3  w-100">
                          
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-add rounded-3  text-black mt-3"> Cart </a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/best_selling_2.jpg" class = "rounded-3 w-100">
                          
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/best_selling_3.jpg" class = "rounded-3 w-100">
                          
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                    <div class = "special-img position-relative overflow-hidden">
                        <img src="Images/HomePage/best_selling_2.jpg" class = "rounded-3 w-100">
                          
                    </div>
                    <div class = "text-center">
                        <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                        <span class = "fw-bold d-block">$ 45.50</span>
                        <a href = "#" class = "btn btn-add rounded-3  text-black  mt-3"> Cart </a>
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
            <h2 class = "position-relative d-inline-block">Female Collection</h2>
        </div>

        <div class = "special-list row g-0">
            <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <div class = "special-img position-relative overflow-hidden">
                    <img src="Images/HomePage/special_product_1.jpg" class = "rounded-3 w-100">
                       
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                    <span class = "fw-bold d-block">$ 45.50</span>
                    <a href = "#" class = "btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                </div>
            </div>

            <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <div class = "special-img position-relative overflow-hidden">
                    <img src="Images/HomePage/special_product_2.jpg" class = "rounded-3 w-100">
                       
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                    <span class = "fw-bold d-block">$ 45.50</span>
                    <a href = "#" class = "btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                </div>
            </div>

            <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <div class = "special-img position-relative overflow-hidden">
                    <img src="Images/HomePage/special_product_3.jpg" class = "rounded-3 w-100">
                       
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                    <span class = "fw-bold d-block">$ 45.50</span>
                    <a href = "#" class = "btn btn-add rounded-3  text-black  mt-3"> Cart </a>
                </div>
            </div>

            <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                <div class = "special-img position-relative overflow-hidden">
                    <img src="Images/HomePage/special_product_4.jpg" class = "rounded-3 w-100">
                       
                </div>
                <div class = "text-center">
                    <p class = "text-capitalize mt-3 mb-1">gray shirt</p>
                    <span class = "fw-bold d-block">$ 45.50</span>
                    <a href = "#" class = "btn btn-add rounded-3  text-black  mt-3"> Cart </a>
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
             
              <em>Pebbles, New York</em>
            </div>

            <div class="carousel-item ">
              <h2 class="testimonial-text">My cat used to be so lonely , but with TinCat's help, they've found the rhfy grbgry rtrgtg</h2>
              
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
                        <img src="Images/HomePage/on_sale_1.jpg"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Sundress</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="Images/HomePage/on_sale_2.jpg"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Shirtdress</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="Images/HomePage/on_sale_3.jpg"
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
                        <img src="Images/HomePage/top_rated_1.jpg"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Trousers</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="Images/HomePage/top_rated_2.jpg"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Coat</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="Images/HomePage/top_rated_3.jpg"
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
                        <img src="Images/HomePage/top_rated_3.jpg"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">T-shirt</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="Images/HomePage/on_sale_2.jpg"
                            alt="" class="img-fluid pe-3 w-25">
                        <div>
                            <p class="mb-0">Regular Jacket</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-start justify-content-start popular-product">
                        <img src="Images/HomePage/top_rated_1.jpg"
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