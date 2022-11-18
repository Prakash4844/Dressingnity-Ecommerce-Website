<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressingnity Blog</title>
    
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
    <link rel="stylesheet" href="CSS/Blog.css">

</head>

<body>
    <!-- Navbar Starts -->
    <?php
        include('Partials/Navbar.html')
    ?>
    <!-- Navbar Ends -->

    <!-- BLOG STARTS -->

    <div class="card mb-3 container blog-page shadow-sm">
        <img class="card-img-top" src="Images/SVG Samples/Dressingnity (LOGO-final).svg" alt="Card image cap">
        <div class="card-body">
            <h1>What is "Dressingnity"? and How it came to be?</h1>
            <p class="card-text">The History of Dressingnity.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

            <p class="card-text">The Complete history of Dressingnity.</p>

            <p class="Text-Content">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                fermentum massa justo sit
                amet risus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget
                risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Integer posuere erat
                a ante venenatis dapibus posuere velit aliquet.</p>
            <p class="Text-Content">Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus
                posuere velit aliquet.
                Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras
                justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque
                nisl consectetur et.</p>

        </div>
    </div>

    <!-- BLOG ENDS -->


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