<!DOCTYPE html>
<html lang="en">

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
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/Styles.css">
    <link rel="stylesheet" href="CSS/Login.css">

    <!-- Favicon -->
    <link rel="icon" href="images/Images/SVG Samples/Dressingnity SVG.svg">
</head>

<body>
    <!-- Navbar Starts -->
    <?php
        include('Partials/Navbar.html')
    ?>
    <!-- Navbar Ends -->

    <div class="wrapper">
        <header>Login Form</header>
        <form action="login_query.php" method="POST">
            <div class="field email">
                <div class="input-area Play_font">
                    <input type="text" name="username" required="required" placeholder="Email Address">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt Play_font">Email can't be blank</div>
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
					//checking if the session 'error' is set. Erro session is the message if the 'Username' and 'Password' is not valid.
					if(ISSET($_SESSION['error'])){
				?>
				<!-- Display Login Error message -->
					<div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
				<?php
					//Unsetting the 'error' session after displaying the message. 
					session_unset($_SESSION['error']);
					}
				?>

            <!-- <div class="pass-txt Play_font"><a href="#">Forgot password?</a></div> -->
            <input type="submit" name="login" value="Login">
        </form>
        <div class="sign-txt Play_font">Not yet member? <a href="Register.php">Register now</a></div>
    </div>


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