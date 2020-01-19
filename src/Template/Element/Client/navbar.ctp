<?php
use Cake\ORM\TableRegistry;
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
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/clientstyles.css">
    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<nav class="gtco-nav" role="navigation">
        <div class="gtco-container">

            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <div id="gtco-logo"><?= $this->Html->link('Allsorters', ['controller' => 'Articles', 'action' => 'home']) ?></div>

                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
<!--                        class="active"-->
                        <li class="active"><?= $this->Html->link('Home', ['controller' => 'Articles', 'action' => 'home']) ?></li>
                        <li><?= $this->Html->link('About', ['controller' => 'About', 'action' => 'index']) ?></li>
                        <li class="has-dropdown">
                            <a href="#">Services</a>
                            <ul class="dropdown">
                                <li><?= $this->Html->link('Service1', ['controller' => 'Service', 'action' => 'index']) ?></li>
                                <li><?= $this->Html->link('Service2', ['controller' => 'Service', 'action' => 'index']) ?></li>
                                <li><?= $this->Html->link('Service3', ['controller' => 'Service', 'action' => 'index']) ?></li>
                            </ul>
                        </li>
                        <li class="has-dropdown">
                            <a href="#">Dropdown</a>
                            <ul class="dropdown">
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">CSS3</a></li>
                                <li><a href="#">Sass</a></li>
                                <li><a href="#">jQuery</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>

<!-- Main -->
<script src="js/main.js"></script>
