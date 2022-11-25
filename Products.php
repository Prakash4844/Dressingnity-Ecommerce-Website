<!DOCTYPE html>
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
    
    <!-- DarkReader JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/darkreader@4.9.58/darkreader.min.js"></script>    

    <!-- Custom CSS -->
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

    <div class="none"><img src="Images/Wave SVG.svg" alt=""></div>


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

    <!-- Custom JS -->
    <script src="JavaScript/Cookies.js"></script>
    <!-- Custom JS -->

    <!-- Darkmode-Toggle -->
    <script src="JavaScript/DarkModeToggle.js"></script>
</body>

</html>