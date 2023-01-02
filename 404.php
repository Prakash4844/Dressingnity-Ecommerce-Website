<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
    <link rel="stylesheet" href="CSS/404.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- RemixIcon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- DarkReader JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/darkreader@4.9.58/darkreader.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/About.css">
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

    <!--dust particel-->
    <div>
        <div class="starsec"></div>
        <div class="starthird"></div>
        <div class="starfourth"></div>
        <div class="starfifth"></div>
    </div>
    <!--Dust particle end--->

    <section class="error">
        <!-- Content -->
        <div class="error__content">
            <div class="error__message message">
            <h1 class="message__Head">404</h1>
                <h1 class="message__title">Page Not Found</h1>
                <p class="message__text">We're sorry, the page you were looking for isn't found here. The link you
                    followed may either be broken or no longer exists. Please try again, or take a look at our.</p>
            </div>
            <div class="error__nav e-nav">
                <a href="index.php" class="e-nav__link"></a>
            </div>
        </div>
        <!-- END Content -->

    </section>

    <!-- Footer Starts -->
    <?php
    include('Partials/Footer.php')
    ?>
    <!--Footer Ends-->

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Bootstrap JS Bundle -->

    <!-- Darkmode-Toggle -->
    <script src="JavaScript/DarkModeToggle.js"></script>
</body>

</html>