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
                <ul class="navbar-nav me-3">
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="btn btn-light dropdown-toggle vio-outline" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bars pe-2"></i> Menu
                            </a>

                            <ul class="dropdown-menu dropdown-menu-light" style="margin-top: 17px;">
                                <!-- Try to Fix Dropdown position by removing inline CSS -->
                                <li>
                                    <a class="dropdown-item" href="../index.php#collection">
                                        <i class="ri-genderless-line"></i> All</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item" href="../index.php#special">
                                        <i class="ri-t-shirt-2-line"></i> Men</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="../index.php#special-m">
                                        <i class="ri-t-shirt-line"></i> Women</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Left links -->

                <form class="d-flex align-items-center w-100 form-search">
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

                <ul class="navbar-nav ms-3">
                    <li class="nav-item me-3">
                        <a class="nav-link d-flex align-items-center vio-outline" href="Products.php">
                            <i class="ri-shopping-bag-line"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center me-3 vio-outline" href="cart.php">
                            <i class="ri-shopping-cart-line"></i>
                        </a>
                    </li>
                    <li class="nav-item" style="width: 65px;">
                        <a class="btn btn-light vio-outline rounded nav-link d-flex align-items-center sign-in"
                            href="Login.php">Sign In</a>
                    </li>
                </ul>
            </div>

            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar Ends -->
    </body>