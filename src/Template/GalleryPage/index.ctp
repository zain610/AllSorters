<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleryPage[]|\Cake\Collection\CollectionInterface $galleryPage
 */
?>
<head>
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="EldersCare Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery-1.11.1.min.js"></script>
    <!--webfonts-->
    <link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
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
    <!--light-box-files -->
    <script src="js/modernizr.custom.97074.js"></script>
    <script src="js/jquery.chocolat.js"></script>
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">

    <script type="text/javascript" charset="utf-8">
        $(function() {
            $('.g-left a').Chocolat();
        });
    </script>
    <!--light-box-files -->

</head>
<body>
<!-- banner -->
<div class="gallery" id="gallery">
    <div class="container">
        <div class="gallery-top heading">
            <h3>Our Gallery</h3>
        </div>
        <div class="gallery-bottom">
            <div class="grid">
                <div class="col-md-4 g-left">
                    <div class="twentytwenty-wrapper"><div class="twentytwenty-container" style="height: 328px;">
                            <img alt="Sample before" src="/img/6.jpg" class="twentytwenty-before" style="clip: rect(0px, 318.5px, 328px, 0px);">
                            <img alt="Sample after" src="/img/6.jpg" class="twentytwenty-after">
                            <div class="twentytwenty-overlay"><div class="twentytwenty-before-label"></div><div class="twentytwenty-after-label"></div></div><div class="twentytwenty-handle" style="left: 318.5px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div></div></div>


                </div>
                <div class="col-md-4 g-left">
                    <a href="img/6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="img/6.jpg" alt="">
                            <figcaption>
                            </figcaption>

                        </figure>
                    </a>
                </div>
                <div class="col-md-4 g-left">
                    <a href="img/5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="img/5.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="grid">
                <div class="col-md-4 g-left">
                    <a href="img/4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="img/4.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4 g-left">
                    <a href="img/3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="img/3.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="col-md-4 g-left">
                    <a href="img/2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="img/2.jpg" alt="">
                            <figcaption>

                            </figcaption>
                        </figure>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
