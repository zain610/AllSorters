<!DOCTYPE HTML>
<html>
<head>
    <title><?= $this->fetch('title', 'Welcome to AllSorters') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="AllSorters, Senior Citizens, Aged Care, " />
    <?= $this->Html->css('client_tempate_styling.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('flexslider.css') ?>
    <?= $this->Html->css('slick.css') ?>
    <?= $this->Html->css('slick-theme.css') ?>
    <?= $this->Html->css('chocolat.css') ?>
    <script src="https://kit.fontawesome.com/7f5e59b82c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <?= $this->Html->css('clientStyles.css') ?>

    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Montserrat|Oswald|Roboto&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>



</head>
<body>
<?= $this->element('Client/navbar'); ?>
        <!-- FlexSlider -->
<?= $this->fetch('content') ?>
<?= $this->element('Client/footer'); ?>



</body>
<?= $this->Html->script('jquery-3.4.1.min.js') ?>
<?= $this->Html->script('bootstrap.js') ?>
<?= $this->Html->script('move-top.js') ?>
<?= $this->Html->script('easing.js') ?>
<?= $this->Html->script('slick.js') ?>


<script type="text/javascript">
    $(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>

<?= $this->Html->script('modernizr.custom.97074.js') ?>
<?= $this->Html->script('jquery.chocolat.js') ?>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('.g-left a').Chocolat();
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.blogs-carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1 ,
            adaptiveHeight: true,
            nextArrow: '<i class="fa fa-arrow-right"></i>',
            prevArrow: '<i class="fa fa-arrow-left"></i>',

        });
    });
</script>
<!-- Script for creating sticky navbars  -->
<script type="text/javascript">
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar. Enter "navbar" into the method below to activate the sticky navbar
    var navbar = document.getElementById("");

    // Get the offset position of the navbar
    var sticky = navbar.offsetHeight-50;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

    $('.has-dropdown').mouseenter(function(){

        var $this = $(this);
        $this
            .find('.dropdown')
            .css('display', 'block')
            .addClass('animated-fast fadeInUpMenu');

    }).mouseleave(function(){
        var $this = $(this);

        $this
            .find('.dropdown')
            .css('display', 'none')
            .removeClass('animated-fast fadeInUpMenu');
    });

</script>

</html>
