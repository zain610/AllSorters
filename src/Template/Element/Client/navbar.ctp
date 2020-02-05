
<?php
use Cake\ORM\TableRegistry;

$currentController = $this->request->getParam('controller');
$currentAction = $this->request->getParam('action');
$isHomeActive = $currentController === "Allsorters";
$isAboutActive = $currentController === "About";
$isServicesActive = $currentController === "Services";
$isGalleryActive = $currentController === "GalleryPage";
$isReviewActive = $currentController === "Review";
$isEventsActive = $currentController === "Events";
$isOtherActive = $currentController === "Tips" || $currentController === "Favourites";
$isContactActive = $currentController === "Request";
$isBlogsActive = $currentController === "Blog_post";


?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <?php
    echo $this->Html->css('client2/animate.css');
    echo $this->Html->css('client2/bootstrap.css');
    echo $this->Html->css('client2/clientstyles.css');
    echo $this->Html->css('client2/flexslider.css');
    echo $this->Html->css('client2/icomoon.css');
    echo $this->Html->css('client2/owl.carousel.min.css');
    echo $this->Html->css('client2/owl.theme.default.min.css');
    echo $this->Html->css('client2/style.css');
    echo $this->Html->css('client2/themify-icons.css');
    ?>

</head>
<nav class="gtco-nav" role="navigation" style="background-color:#3bc3ff;">

    <div class="gtco-container">




        <div class="row">
            <div class="col-sm-2 col-xs-12">
                <div id="gtco-logo"><?= $this->Html->link('Allsorters', ['controller' => 'Allsorters', 'action' => 'home']) ?></div>

            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul class="">
                    <!--                        class="active"-->
                    <li  class="<?= $isHomeActive ? 'active' : '' ?>"><?= $this->Html->link('Home', ['controller' => 'Allsorters', 'action' => 'home']) ?></li>
                    <li class="<?= $isAboutActive ? 'active' : '' ?>"><?= $this->Html->link('About', ['controller' => 'About', 'action' => 'index']) ?></li>
                    <li class="<?= $isServicesActive ? 'active' : '' ?>">
                        <?= $this->Html->link('Services', ['controller' => 'Services', 'action' => 'index']) ?>
                    </li>
                    <li  class="<?= $isBlogsActive ? 'active' : '' ?>"><?= $this->Html->link('Blog', ['controller' => 'Blog_post', 'action' => 'index']) ?></li>
                    <li class="<?= $isGalleryActive ? 'active' : '' ?>"><?= $this->Html->link('Gallery', ['controller' => 'GalleryPage', 'action' => 'index']) ?></li>
                    <li class="nav-link-testimonials"><?= $this->Html->link('Testimonials', ['controller' => 'Review', 'action' => 'index']) ?></li>
                    <li class="nav-link-events"><?= $this->Html->link('Speaking Engagements', ['controller' => 'Events', 'action' => 'index']) ?></li>

                    <li class="has-dropdown <?= $isOtherActive ? 'active' : '' ?>">
                        <a href="#">Other</a>
                        <ul class="dropdown">
                            <li><?= $this->Html->link('Tips', ['controller' => 'Tips', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link('Favourites', ['controller' => 'Favourites', 'action' => 'index']) ?></li>
                        </ul>
                    </li>
                    <li class="<?= $isContactActive ? 'active': ''?>"><?= $this->Html->link('Contact',['controller' => 'Request', 'action' => 'add'])?></li>
                </ul>
            </div>
        </div>

    </div>
</nav>

<?php
echo $this->Html->script('client2/respond.min.js');
echo $this->Html->script('client2/modernizr-2.6.2.min.js');
echo $this->Html->script('client2/jquery.min.js');
echo $this->Html->script('client2/jquery.easing.1.3.js');
echo $this->Html->script('client2/bootstrap.min.js');
echo $this->Html->script('client2/jquery.waypoints.min.js');
echo $this->Html->script('client2/owl.carousel.min.js');
?>
