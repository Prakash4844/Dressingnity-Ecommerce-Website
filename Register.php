<!DOCTYPE html>
<?php 
//starting the session
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
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/Styles.css">
    <link rel="stylesheet" href="CSS/Login.css">

</head>
    <!-- Navbar Starts -->
    <?php
        include('Partials\Navbar.html')
    ?>
    <!-- Navbar Ends -->


	<div class="wrapper">
	<header>Registration Form</header>
        <!-- <form action="Login.php"> -->
		<!-- Registration Form start -->
		<form method="POST" action="save_member.php">

		<div class="field email">
                <div class="input-area Play_font">
                    <input type="text" placeholder="Email Address" required="required" name="username">
                    <i class="icon fas fa-envelope"></i>
                    <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt Play_font">Email can't be blank</div>
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
				<div class="alert alert-success"><?php echo $_SESSION['success']?></div>
				<?php
					//Unsetting the 'success' session after displaying the message. 
					unset($_SESSION['success']);
					}
				?>
		
            <!-- <div class="pass-txt Play_font"><a href="#">Forgot password?</a></div> -->
            <input name="register" type="submit" value="Register">
			<!-- Link for redirecting to Login Page -->
			<a href="login.php">Already a member? Log in here...</a>

        </form>

	</div>


    <!-- Footer Starts -->
    <?php
        include('Partials\Footer.html')
    ?>
    <!--Footer Ends-->

    <!-- Cookie Banner -->
    <?php
    include('Partials\Cookies.html')
    ?>
    <!-- End of Cookie Banner -->

    <!-- Custom JS -->
    <script src="JavaScript/Cookies.js"></script>
    <!-- Custom JS -->

</body>
</html>