<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressingnity Cart</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- RemixIcon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
        <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/Styles.css">
    <link rel="stylesheet" href="CSS/cart.css">

</head>

<body>
     <!-- Navbar Starts -->
     <?php
        include('/home/zaphkill/Documents/Github/Dressingnity-Ecommerce-Website/Partials/Navbar.html');
    ?>
    <!-- Navbar Ends -->

    <!-- cart section -->
    <div class="wrapper Cart-Section">
        <h1>Shopping Cart</h1>
        <div class="project">
            <div class="shop">
                <div class="box rounded-3">
                    <img src="./Images/G1807757_04.jpeg ">
                    <div class="content">
                        <h3>high wasted jeans</h3>
                        <h4>Price: $40</h4>
                        <p class="unit">Quantity: <input name="" value="2"></p>
                        <p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span
                                class="btn2">Remove</span></p>
                    </div>
                </div>
                <div class="box rounded-3">
                    <img src="./Images/shirt.jpeg">
                    <div class="content">
                        <h3>Man plane Tshirt</h3>
                        <h4>Price: $40</h4>
                        <p class="unit">Quantity: <input name="" value="1"></p>
                        <p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span
                                class="btn2">Remove</span></p>
                    </div>
                </div>
                <!-- <div class="box">
                        <img src="./image.png">
                        <div class="content">
                            <h3></h3>
                            <h4>Price: $250</h4>
                            <p class="unit">Quantity: <input name="" value="0"></p>
                            <p class="btn-area"><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2">Remove</span></p>
                        </div>
                    </div> -->
            </div>
            <div class="right-bar rounded-3">
                <p><span>Subtotal</span> <span>$120</span></p>
                <hr>

                <p><span>Shipping</span> <span>$15</span></p>
                <hr>
                <p><span>Total</span> <span>$141</span></p><a href="Checkout.php"><i class="fa fa-shopping-cart"></i>Checkout</a>
            </div>
        </div>
    </div>


    <!-- Footer Starts -->
    <?php
        include('/home/zaphkill/Documents/Github/Dressingnity-Ecommerce-Website/Partials/Footer.html');
    ?>
    <!--Footer Ends-->

    <!-- Cookie Banner -->
    <?php
    include('/home/zaphkill/Documents/Github/Dressingnity-Ecommerce-Website/Partials/Cookies.html');
    ?>
    <!-- End of Cookie Banner -->

    <!-- Custom JS -->
    <script src="JavaScript/Cookies.js"></script>
    <!-- Custom JS -->

</body>

</html>