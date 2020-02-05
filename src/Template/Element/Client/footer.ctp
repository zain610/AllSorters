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
    <link rel="stylesheet" href="http://ie.infotech.monash.edu/team106/expo/css/client2/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="http://ie.infotech.monash.edu/team106/expo/css/client2/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="http://ie.infotech.monash.edu/team106/expo/css/client2/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="http://ie.infotech.monash.edu/team106/expo/css/client2/bootstrap.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="http://ie.infotech.monash.edu/team106/expo/css/client2/owl.carousel.min.css">
    <link rel="stylesheet" href="http://ie.infotech.monash.edu/team106/expo/css/client2/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="http://ie.infotech.monash.edu/team106/expo/css/client2/style.css">
    <link rel="stylesheet" href="http://ie.infotech.monash.edu/team106/expo/css/client2/clientstyles.css">
    <!-- Modernizr JS -->
    <script src="http://ie.infotech.monash.edu/team106/expo/js/client2/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="http://ie.infotech.monash.edu/team106/expo/js/client2/respond.min.js"></script>
    <![endif]-->

</head>


<?php foreach ($query as $footer): ?>
    <footer id="gtco-footer" class="gtco-section" role="contentinfo">
        <div class="gtco-container">
            <div class="row row-pb-md">
                <div class="col-md-4 gtco-widget gtco-footer-paragraph" style="color: #b9b9b9">
                    <h3>Contact</h3>
                    <p><b>Phone: </b><?php echo $footer->Phone; ?></p>
                    <p><b>Address: </b><?php echo $footer->Address; ?></p>
                </div>
                <div class="col-md-4 footer_a">
                    <div class="row">
                        <div class="col-md-6 col-sm-2 gtco-footer-link">
                            <h3>Follow Us</h3>
                            <ul class="gtco-list-link">
                                <li><a href="<?php echo $footer->Facebook; ?>">Facebook</a></li>
                                <li><a href="<?php echo $footer->Tumblr; ?>">Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gtco-footer-subscribe">
                    <div class="form-inline">
                        <div class="form-group gtco-footer-link" style="padding-left: 0px">
                            <h3>Newsletter Subscription</h3>
                            <div class="col-md-6"style="padding-left: 0px">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <?= $this->element('Client/subscribe'); ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="gtco-copyright">
            <div class="gtco-container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p><small>Copyright © <b>all sorters</b> ... home sorting specialists 2020. All Rights Reserved.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->
<?php endforeach; ?>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="http://ie.infotech.monash.edu/team106/expo/js/client2/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="http://ie.infotech.monash.edu/team106/expo/js/client2/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="http://ie.infotech.monash.edu/team106/expo/js/client2/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="http://ie.infotech.monash.edu/team106/expo/js/client2/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="http://ie.infotech.monash.edu/team106/expo/js/client2/owl.carousel.min.js"></script>

<!-- Main -->
<script src="http://ie.infotech.monash.edu/team106/expo/js/client2/main.js"></script>
