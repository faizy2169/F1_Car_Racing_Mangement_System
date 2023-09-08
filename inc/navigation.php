
<div id="preloader"></div>
<div id="preloader-overlayer"></div>

<header class="rn-header">

   

    <div class="rn-menubar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">

                    <a class="brand-name" href="index.php">
                        <img src="assets/images/logo.png"  class="img-fluid" alt="" width="80px">
                    </a>
                </div>
                <div class="col-9">
                    <nav class="rn-navbar-container">

                                <!-- Navbar Toggle Button for Only Tablet and Phone-->
                                <button class="rn-navbar-toggler" id="rn-navbar-toggler">
                                    <span class="rn-navbar-toggler-bar"></span>
                                    <span class="rn-navbar-toggler-bar"></span>
                                    <span class="rn-navbar-toggler-bar"></span>
                                </button>

                                <!-- Main Nav Menu-->
                                <ul class="rn-navbar">
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.php">About</a>
                                    </li>
                                    <?php if (isset($_SESSION['partner_login'])): ?>
                                       <li>
                                            <a href="#">Add New Compitition 
                                                <i class="lnr lnr-chevron-down"></i>
                                            </a>
                                            <ul>
                                                <li><a href="compition.php">New Compition</a></li>
                                                <li><a href="my_compition.php">List My Compition</a></li>
                                                <li><a href="logout.php">Logout</a></li>
                                            </ul>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <a href="#">Add New Compitition 
                                                <i class="lnr lnr-chevron-down"></i>
                                            </a>
                                            <ul>
                                                <li><a href="login.php">Login</a></li>
                                                <li><a href="registration.php">Registration</a></li>
                                            </ul>
                                        </li>
                                    <?php endif ?>
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>

                            </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Menubar-->

</header>