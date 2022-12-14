<!DOCTYPE html>
<?php 
//starting the session
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dressingnity Registration</title>

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
<!-- Navbar Starts -->
    <?php
        include('Partials/Navbar.php')
    ?>
<!-- Navbar Ends -->


<div class="wrapper">
    <header>Registration</header>
    <!-- <form action="Login.php"> -->
    <!-- Registration Form start -->
    <form method="POST" action="save_member.php" class="login-form">

        <div class="field email">
            <div class="input-area Play_font">
                <input type="text" placeholder="Email Address" required="required" name="email">
                <i class="icon fas fa-envelope"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt Play_font">Email can't be blank</div>
        </div>

        <div class="field username">
            <div class="input-area Play_font">
                <input type="text" placeholder="Username" required="required" name="username">
                <i class="icon fa-solid fa-user"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt Play_font">Username can't be blank</div>
        </div>

        <div class="field password">
            <div class="input-area Play_font">
                <input type="password" name="password" required="required" placeholder="Password">
                <i class="icon fas fa-lock"></i>
                <i class=" Play_font error error-icon fas fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="error error-txt Play_font">Password can't be blank</div>
        </div>

        <div class="field firstname">
            <div class="input-area Play_font">
                <input type="text" name="firstname" required="required" placeholder="FirstName">
                <i class="icon fa fa-user-plus" aria-hidden="true"></i>
                <i class=" Play_font error error-icon fas fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="error error-txt Play_font">First Name can't be blank</div>
        </div>

        <div class="field lastname">
            <div class="input-area Play_font">
                <input type="text" name="lastname" required="required" placeholder="Last Name">
                <i class="icon fa fa fa-user-plus" aria-hidden="true"></i>
                <i class=" Play_font error error-icon fas fa-exclamation-circle" aria-hidden="true"></i>
            </div>
            <div class="error error-txt Play_font">Last Name can't be blank</div>
        </div>
        <?php
					//checking if the session 'success' is set. Success session is the message that the credetials are successfully saved.
					if(ISSET($_SESSION['success'])){
				?>
        <!-- Display registration success message -->
        <div class="alert alert-success">
            <?php echo $_SESSION['success']?>
        </div>
        <?php
					//Unsetting the 'success' session after displaying the message. 
					unset($_SESSION['success']);
					}
				?>

        <!-- <div class="pass-txt Play_font"><a href="#">Forgot password?</a></div> -->
        <input name="register" type="submit" value="Register">
        <!-- Link for redirecting to Login Page -->
        <a href="Login.php">Already a member? Log in here...</a>

    </form>

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