<!DOCTYPE html>
<html lang="en">
<?php 
//starting the session
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressingnity Login</title>

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
    <link rel="icon" href="Images/SVG Samples/Dressingnity recolor Logo.png">
</head>

<body>
    <!-- Navbar Starts -->
    <?php
        include('Partials/Navbar.php')
    ?>
    <!-- Navbar Ends -->

    <div class="wrapper">
        <header>Login</header>
        <form class="login-form" action="login_query.php" method="POST">
            <div class="field username">
                <div class="input-area Play_font">
                    <input type="text" name="username" required="required" placeholder="username">
                    <i class="icon fa-solid fa-user"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt Play_font">username can't be blank</div>
            </div>

            <div class="field password">
                <div class="input-area Play_font">
                    <input type="password" required="required" name="password" placeholder="Password">
                    <i class="icon fas fa-lock"></i>
                    <i class=" Play_font error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt Play_font">Password can't be blank</div>
            </div>
           
<?php
					//checking if the session 'error' is set. error session is the message that the credetials are Do not match.
					if(ISSET($_SESSION['error'])){
				?>
        <!-- Display registration error message -->
        <div class="alert alert-danger">
            <?php echo $_SESSION['error']?>
        </div>
        <?php
					//Unsetting the 'error' session after displaying the message. 
					unset($_SESSION['error']);
					}
				?>

            <!-- <div class="pass-txt Play_font"><a href="#">Forgot password?</a></div> -->
            <input type="submit" name="login" value="Login">
        </form>
        <div class="sign-txt Play_font">Not yet member? <a href="Register.php">Register now</a></div>
    </div>


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