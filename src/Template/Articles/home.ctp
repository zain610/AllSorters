<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Carousel Example</h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/bg.jpg" alt="bg" style="width:100%;">
            </div>

            <div class="item">
                <img src="img/2e3a450c42c5b5dabd1447dfb1069f54b589e8bf.jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
                <img src="img/bg.jpg" alt="pete" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="banner" id="home">
    <div class="container">
        <section class="slider">
            <div>
                <ul class="slides">
                    <li>
                        <div class="banner-info">
                            <h2>GET HELP CARING FOR YOUR LOVED ONE</h2>
                            <p>Nasagni dolorequaone voluptase keroas emsequi nesas ciuneque pobasera .</p>
                            <a class="hvr-shutter-in-horizontal" href="#">Learn More</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

    </div>
</div>
<hr>
<div class="services" style="display: flex">
    <div class="container">
        <div class="camp">
            <h3>Services Overview</h3>
            <?php foreach($services as $service) { ?>
                <div class="col-lg-2 minist-right">
                    <img src="https://images.unsplash.com/photo-1503541517233-120571491cf3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=633&q=80" class="img-responsive" alt="">
                    <h4><?= $service['Service_Title'] ?></h4>
                    <span><?= $this->Text->truncate(h($service['Service_Description']), 20, ['ellipsis' => '...',
                            'exact' => false]) ?></span>
                    <?= $this->Html->link('More', ['controller' => 'Services', 'action'=> 'displayServices', 'id'=>$service['Service_id']], ['class' => 'hvr-shutter-in-horizontal']) ?>

                </div>
            <?php }?>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="container" id="newsletter-signup">
        <?= $this->element('Client/subscribe'); ?>
    </div>
</div>
<hr>
<div class="services container">
    <h3>Blogs</h3>
    <div class="list-group pre-scrollable">
        <?php foreach ($blogs as $blog) { ?>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h4><?= $blog['title'] ?></h4>
                    <button class="btn btn-primary"> Read More </button>
                    <p><?= $blog['Body'] ?></p>
                    <small>Date Published: <?= $blog['created'] ?></small>

                </div>


            </a>
        <?php } ?>
    </div>
</div>

<hr>
<div class="about">
    <div class="container">
        <div class="col-md-8 about-right">
            <h4>Contact us for the Appropriate level of Care</h4>
            <div class="offer offer-right">
                <img src="#" class="img-responsive" alt="">
                <form>
                    <input type="text" value="Enter Your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>


        <!--        <div class="col-md-4 about-left">-->
        <!--            <h4>Elders Care</h4>-->
        <!--            <ul>-->
        <!--                <li><a href="#"><span></span> Lorem Ipsum has been </a></li>-->
        <!--                <li><a href="#"><span></span> unknown printer took a galley </a></li>-->
        <!--                <li><a href="#"><span></span>containing Lorem Ipsum passages,</a></li>-->
        <!--                <li><a href="#"><span></span>publishing software like Aldus</a></li>-->
        <!--                <li><a href="#"><span></span>PageMaker including versions</a></li>-->
        <!--            </ul>-->
        <!---->
        <!--        </div>-->
        <div class="clearfix"></div>
    </div>
</div>


</body>
</html>
