<?php
//use Cake\ORM\TableRegistry;
//
//$footer = TableRegistry::getTableLocator()->get('Footer');
//$query = $footer->find();
//?>

<?php
use Cake\ORM\TableRegistry;

$footer = TableRegistry::getTableLocator()->get('Footer');
$query = $footer->find();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/client2/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/client2/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="css/client2/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/client2/bootstrap.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/client2/owl.carousel.min.css">
    <link rel="stylesheet" href="css/client2/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/client2/style.css">
    <link rel="stylesheet" href="css/client2/clientstyles.css">
    <!-- Modernizr JS -->
    <script src="js/client2/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/client2/respond.min.js"></script>
    <![endif]-->

</head>
<div class="gtco-section gto-features">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-4">
                <div class="feature-left">
                    <i class="ti-comment icon"></i>
                    <div class="copy">
                        <h3>Allsorter Tips</h3>
                        <p>Lorem ipsum dolor sit ameteista, consectetur adipiscing is not elitistaris.</p>
                        <p><a href="#" class="gtco-more" style="color: #298ad6">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-left">
                    <i class="ti-calendar icon"></i>
                    <div class="copy">
                        <h3>Upcoming Events</h3>
                        <p>Lorem ipsum dolor sit ameteista, consectetur adipiscing is not elitistaris.</p>
                        <p><a href="#" class="gtco-more" style="color: #298ad6">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-left">
                    <i class="ti-mobile icon"></i>
                    <div class="copy">
                        <h3>Contact Us</h3>
                        <p>Lorem ipsum dolor sit ameteista, consectetur adipiscing is not elitistaris.</p>
                        <p><a href="#" class="gtco-more" style="color: #298ad6">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="gtco-footer" class="gtco-section" role="contentinfo">
    <div class="gtco-container">
        <div class="row row-pb-md">
            <div class="col-md-4 gtco-widget gtco-footer-paragraph" style="color: #b9b9b9">
                <h3>Contact</h3>
                <p><b>Phone: </b>+61 1234567890</p>
                <p><b>Email: </b>Mary@allsorters.com</p>
                <p><b>Address: </b>Allsorters, PO Box 1043, Greythorn, Vic, 3104</p>
            </div>
            <div class="col-md-4 footer_a">
                <div class="row">
                    <div class="col-md-6 col-sm-2 gtco-footer-link">
                        <h3>Links</h3>
                        <ul class="gtco-list-link">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Testimonial</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-2 gtco-footer-link">
                        <h3>Follow Us</h3>
                        <ul class="gtco-list-link">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Google+</a></li>
                            <li><a href="#">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 gtco-footer-subscribe">
                <form class="form-inline">
                    <div class="form-group gtco-footer-link">

                        <div class="col-md-12">
                            <h3>Subscribe Newsletter</h3>
                            <div class="form-check form-check-inline" style="display: contents">
                                <div>
                                    <?= $this->element('Client/subscribe'); ?>

                                </div>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="gtco-copyright">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <p><small>Copyright © <b>all sorters</b> home sorting specialists 2020. All Rights Reserved.</small></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->



<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/client2/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/client2/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/client2/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/client2/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/client2/owl.carousel.min.js"></script>

<!-- Main -->
<script src="js/client2/main.js"></script>
