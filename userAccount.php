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
    <!-- bootstrap CDN link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- DarkReader JavaScript CDN -->
    <script src="https://cdn.jsdelivr.net/npm/darkreader@4.9.58/darkreader.min.js"></script>

    <link rel="stylesheet" href="userAccount.css">
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
              <div class="card-body p-4 p-sm-5">
                <h2 class="card-title text-center mb-5 fw-light fs-5">Anna Avestiyan</h2>
                    <img class="mx-auto d-block" src="Images/userAccount/accountImage.png" alt="AccountImage">
                <form>
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control no-outline" id="floatingFirstName" placeholder="Anna">
                    <label for="floatingInput">First name</label>
                  </div>
                  <hr class="my-4">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control no-outline" id="floatingLastName" placeholder="Avastiyan">
                    <label for="floatingPassword">Last name</label>
                  </div>
                  <hr class="my-4">
                  <div class="form-floating mb-3">
                    <input type="date" class="form-control no-outline" id="floatingBirthday" placeholder="Birthday">
                    <label for="floatingInput">Birthday</label>
                  </div>
                  <hr class="my-4">
                  <div class="form-floating mb-3">
                    <input type="number" class="form-control no-outline" id="floatingPhoneNo" placeholder="8181234567">
                    <label for="floatingPassword">Phone No</label>
                  </div>
                  <hr class="my-4">
                  <div class="form-floating mb-3">
                    <input type="url" class="form-control no-outline" id="floatingURL" placeholder="Instagram Account">
                    <label for="floatingInsta Account">Insta account</label>
                  </div>
                  <hr class="my-4">
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control no-outline" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <hr class="my-4">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control no-outline" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
    
                  <hr class="my-4"> <br> <br> 
                  <div class="d-grid mb-2">
                    <button class="btn btn-EditProfile btn-login text-uppercase fw-bold" type="submit"> Edit Profile
                    </button>
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