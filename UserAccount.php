<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    
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

    <link rel="stylesheet" href="CSS/Styles.css">
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="CSS/UserAccount.css">

    <!-- Favicon -->
    <link rel="icon" href="Images/SVG Samples/Dressingnity recolor Logo.png">

</head>

<body>

  <!-- Navbar Starts -->
  <?php
  include('Partials/Navbar.php')
  ?>

  <!-- Navbar Ends -->




  <div class="container">

    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div align=center class="card-body p-4 p-sm-5">
            <i class="fa-solid fa-circle-user extra-lg vio-outline"></i>
            <hr>
            <h6 align=left>Email</h6>
            <form action="Logout.php" class="login-form">
              <div class="form-floating mb-3 input-area Play_font">
                <input type="text" class="form-control no-outline" id="floatingEmail" placeholder="xyzEmail" disabled>
                <label for="floatingEmail"><i style="margin-right: 15px;" class="icon fas fa-envelope vio-outline"></i>
                  <?php echo $_SESSION['loggedemail'] ?>
                </label>
              </div>
              <hr class="my-4">
              <h6 align=left>First Name</h6>
              <div class="form-floating mb-3 input-area Play_font">
                <input type="number" class="form-control no-outline" id="floatingFirstName" placeholder="John" disabled>
                <label for="floatingLastname"><i style="margin-right: 15px;" class="icon fa fa-user-plus vio-outline"
                    aria-hidden="true"></i>
                  <?php echo $_SESSION['loggedfirstname'] ?>
                </label>
              </div>
              <hr class="my-4">
              <h6 align=left>Last Name</h6>
              <div class="form-floating mb-3 input-area Play_font">
                <input type="text" class="form-control no-outline" id="floatingLastName" placeholder="Doe" disabled>
                <label for="floatingFirst"><i style="margin-right: 15px;" class="icon fa fa fa-user-plus vio-outline"
                    aria-hidden="true"></i>
                  <?php echo $_SESSION['loggedlastname'] ?>
                </label>
              </div>
              <hr class="my-4">
              <h6 align=left>Username</h6>
              <div class="form-floating mb-3 input-area Play_font">
                <input type="email" class="form-control no-outline" id="floatingInput" placeholder="Username" disabled>
                <label for="floatingUsername"><i style="margin-right: 15px;"
                    class="icon fa-solid fa-user vio-outline"></i>
                  <?php echo $_SESSION['loggedusername'] ?>
                </label>
              </div>
              <hr class="my-4">
              <h6 align=left>Password</h6>
              <div class="form-floating mb-3 input-area Play_font">
                <input type="password" class="form-control no-outline" id="floatingPassword" placeholder="********"
                  disabled>
                <label for="floatingPassword"><i style="margin-right: 15px;"
                    class="icon fas fa-lock vio-outline"></i>********</label>
              </div>
              <input type="submit" name="login" value="Logout">

          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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