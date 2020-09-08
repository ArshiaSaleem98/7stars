<?php
    session_start();
    if(isset($_SESSION['email'])) {
        header('location: index.php');
        exit();
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>7Stars</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>


<body>
<div class="header-top">
    <div class="container">
        <div class="ht-left">
            <div class="mail-service">
                <i class=" fa fa-envelope"></i>
                hello.colorlib@gmail.com
            </div>
            <div class="phone-service">
                <i class=" fa fa-phone"></i>
                +65 11.188.888
            </div>
        </div>
        <div class="ht-right">
            <a href="login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
            <a href="register.php"  class="login-panel"><i class="fa fa-user"></i>Register</a>

            <div class="top-social">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter-alt"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="container" style="height: 100px;">

    <div class="inner-header">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="logo">
                    <a href="index.php">
                        <img src="icons/logocloth5.png" alt="">
                    </a>
                </div>
            </div>


            <div class="col-lg-3 text-right col-md-3" style="margin-top: 40px;margin-left: 680px;">

                <ul class="nav-right">

                    <li class="cart-icon">
                        <a href="#">
                            <i class="icon_bag_alt"></i>
                            <span>3</span>
                        </a>
                        <div class="cart-hover">
                            <div class="select-items">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="si-pic"><img src="img/select-product-1.jpg" alt=""></td>
                                        <td class="si-text">
                                            <div class="product-selected">
                                                <p>$60.00 x 1</p>
                                                <h6>Kabino Bedside Table</h6>
                                            </div>
                                        </td>
                                        <td class="si-close">
                                            <i class="ti-close"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
                                        <td class="si-text">
                                            <div class="product-selected">
                                                <p>$60.00 x 1</p>
                                                <h6>Kabino Bedside Table</h6>
                                            </div>
                                        </td>
                                        <td class="si-close">
                                            <i class="ti-close"></i>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="select-total">
                                <span>total:</span>
                                <h5>$120.00</h5>
                            </div>
                            <div class="select-button">
                                <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                            </div>

                        </div>

                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<div class="nav-item" style="margin-bottom: 0px; margin-top: 0px;">
    <div class="container" style="margin-left: 0px;">

        <nav class="nav-menu mobile-menu" style="margin-left: 540px;">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li><a href="./contact.html">About Us</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                        <li><a href="./check-out.html">Checkout</a></li>
                        <li><a href="./faq.html">Faq</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="./login.html">Login</a></li>
                    </ul>
                </li>

            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
</div>
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    <form id="login-form" autocomplete="off">
                        <div id="form-msg"></div>
                        <div class="group-input">
                            <input class="form-control" type="text" id="email" placeholder="Email*">
                            <div id="email-error" class="text-danger"></div>
                        </div>
                        <div class="group-input">
                            <input class="form-control" type="password" id="password" placeholder="Password*">
                            <div id="password-error" class="text-danger"></div>
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <a href="#" class="forget-pass">Forget your Password</a>
                            </div>
                        </div>
                        <button type="button" id="login-btn" class="site-btn login-btn">Sign In</button>
                    </form>
                    <div class="switch-login">
                        <a href="register.php" class="or-login">Or Create An Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->



<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer-left">

                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello.colorlib@gmail.com</li>
                    </ul>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="copyright-reserved">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This
                        template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                            href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="payment-pic">
                        <img src="img/payment-method.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery.dd.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/login_auth.js"></script>
</body>

</html>
