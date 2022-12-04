<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressingnity Sign-in</title>

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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/Styles.css">
    <link rel="stylesheet" href="CSS/Login.css">

    <!-- Favicon -->
    <link rel="icon" href="Images/Fevicon/Dressingnity SVG.png">
</head>

<body>
    <!-- Navbar Starts -->
    <?php
        include('Partials/Navbar.php')
    ?>
    <!-- Navbar Ends -->
    <ul>
    <li><span class="text-center"><?php echo $_SESSION['loggedusername']?></span></li>
    
    <li><span class="text-center"><?php echo $_SESSION['loggedemail']?></span></li>
    
    <li><span class="text-center"><?php echo $_SESSION['loggedfirstname']?></span></li>
    
    <li><span class="text-center"><?php echo $_SESSION['loggedlastname']?></span></li>
    
    <li><span class="text-center"><?php echo  $_SESSION['loggedpassword']?></span></li>
    </ul>
    <img src="Images/Wave SVG.svg" alt="wave">
    <p align=center>
        <a href="https://git.io/typing-svg"><img src="https://readme-typing-svg.herokuapp.com?font=Fira+Code&weight=600&size=50&pause=1000&color=A83D7B&width=600&height=80&lines=Work+in+Progress..." alt="Typing SVG" /></a>    
    </p>
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
