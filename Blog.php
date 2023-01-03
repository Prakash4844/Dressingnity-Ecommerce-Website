<!DOCTYPE html>
<?php
	session_start();
?>
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!-- DarkReader JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/darkreader@4.9.58/darkreader.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/Styles.css">
    <link rel="stylesheet" href="CSS/Blog.css">

    <!-- Favicon -->
    <link rel="icon" href="Images/SVG Samples/Dressingnity recolor Logo.png">

</head>

<body>
    <!-- Navbar Starts -->
    <?php
        include('Partials/Navbar.php')
    ?>
    <!-- Navbar Ends -->

    <!-- BLOG STARTS -->

    <div class="card mb-3 container blog-page shadow-sm">
        <img class="card-img-top" src="Images/SVG Samples/Dressingnity (LOGO-final).svg" alt="Card image cap">
        <div style="background-color: white;">
            <h1>What is "Dressingnity"? and How it came to be?</h1>
            <p class="card-text fw-bolder">The History of Dressingnity.</p>
            <p class="card-text"><small class="text-muted">Last updated recently.</small></p>

            <p class="card-text fw-bold">The Complete history of Dressingnity.</p>

            <p class="text-wrap">Dressingnity didn't start as Dressingnity, at first We were calling the brand “SSTP”
                Which is composed of initials of all the dev's name. Yeah, we know, How bland is that?
                Well if you do want to see the initial logo Then Here you go </p>
            <p align="center">
                <img src="Images/OLD Branding/Navbar_icon_Trans-1.png" width="50%" alt="SSTP_Logo"><br>
            </p>
            <p class="text-wrap">Now let's Go back a little further in time, as some of you might remember that we had
                already worked on a project a year back or so Named as
                <a href="https://github.com/Prakash4844/Basic-ATM-Machine-Project-in-C"
                    alt="NSTTPKS Bank Service">“NSTTPKS Bank Service”</a><br><br>
                I will be honest here, the end of our last project was by no means a happy ending.
                There was confusion, conflicts, misunderstanding and whatnot and don't think that now there isn't,
                conflicts and misunderstanding are a part of growing up,
                but I think that we have grown and learned from that.(atleast i believe we have).<br><br>
                So we tried and compromised in order to resolve the anguish between us and from that we decided
                to make another project, i know this is getting stupider and stupider by word. and there's a proverb in
                Hindi(आग को आग मारती है) so we thought why not we do the same. and rest is what you are seeing now...
            </p>

        </div>
    </div>

    <!-- BLOG ENDS -->


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