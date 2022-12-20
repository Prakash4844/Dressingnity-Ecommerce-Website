<!DOCTYPE html>
<html lang="en">
<body>
    <!-- Navbar Starts -->
    <nav class="shadow sticky-top ms-1 me-1 rounded-bottom navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container-fluid">

            <!-- Navbar brand -->
            <a class="navbar-brand" href="https://prakash4844.github.io/Dressingnity-Ecommerce-Website/"><img
                    style="height:60px;" src="Images\SVG Samples\Dressingnity (LOGO-final).svg" alt="BrandLogo"></a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav mb-lg-0 me-3">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn btn-light dropdown-toggle vio-outline" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bars pe-2"></i> Menu
                            </a>

                            <ul class="dropdown-menu dropdown-menu-light" style="margin-top: 17px;">
                                <!-- Try to Fix Dropdown position by removing inline CSS -->
                                <li>
                                    <a class="dropdown-item menu-item" href="../index.php#collection">
                                        <i class="ri-genderless-line"></i> All</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item menu-item" href="../index.php#special">
                                        <i class="ri-t-shirt-2-line"></i> Men</a>
                                </li>
                                <li>
                                    <a class="dropdown-item menu-item" href="../index.php#special-m">
                                        <i class="ri-t-shirt-line"></i> Women</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Left links -->

                <form class="align-items-center w-100 form-search">
                    <div class="input-group">
                        <button class="rounded btn btn-light dropdown-toggle shadow-0 vio-outline" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="padding-bottom: 0.4rem;">
                            All
                        </button>
                        <ul class="dropdown-menu dropdown-menu-light" style="margin-top: 15px;">
                            <!-- Try to Fix Dropdown position by removing inline CSS -->
                            <li>
                                <a class="dropdown-item" href="../index.php#collection"><span class="fa-li pe-2"><i
                                            class="ri-genderless-line"></i></span>All</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="../index.php#special"><span class="fa-li pe-2"><i
                                            class="ri-t-shirt-2-line"></i></span>Men</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="../index.php#special-m"><span class="fa-li pe-2"><i
                                            class="ri-t-shirt-line"></i></span>Women</a>
                            </li>
                            <li>
                        </ul>
                        <input class="form-control rounded" type="search" placeholder="Search anything"
                            aria-label="Search">
                        <button class="btn btn-light vio-outline" type="submit"><i class="ri-search-line"></i></button>
                    </div>
                </form>

                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link d-flex align-items-center nav-ico vio-outline" href="Products.php">
                            <i class="ri-shopping-bag-line"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center nav-ico vio-outline" href="cart.php">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </li>
                    <?php
					//checking if the session 'success' is set. Success session is the message that the credetials are successfully saved.
					if(ISSET($_SESSION['Logged-in'])){
				    ?>
                    <!-- Display registration success message -->
                    <div class="dropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                                <button class="btn mb-lg-0 me-4 shadow-0 nav-link" style="color: #a83d7b; "
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-circle-user fa-2xl"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><span class="dropdown-item-text text-center"><?php echo $_SESSION['username']?></span></li>
                                    <li><span class="dropdown-item-text text-center"><?php echo $_SESSION['Logged-in']?></span><li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="Account.php">Account</a></li>
                                    <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <?php
					//Unsetting the 'success' session after displaying the message. 
					} 
                    else{?>
                    <li class="nav-item" style="width: 80px;">
                        <a class="btn btn-light vio-outline rounded nav-ico nav-link align-items-center sign-in"
                            href="Login.php">Sign In</a>
                    </li>

                    <?php
                   }
                   ?>



                </ul>
            </div>

            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar Ends -->
</body>