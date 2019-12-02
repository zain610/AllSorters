<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #more {display: none;}
    </style>

</head>
<script type="text/javascript">
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetHeight;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

</script>
<body>
<div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <div class="carousel-inner">
            <div class="item active">

                <img src="img/bg2.jpg" alt="bg">
                <div class="text">Caption Text1</div>
            </div>

            <div class="item">
                <img src="img/dockland 5.3.2018.jpg" alt="dockland">
                <div class="text">Caption Text2</div>
            </div>

            <div class="item">

                <img src="img/bg.jpg" alt="bg">
                <div class="text">Caption Text3</div>
            </div>
        </div>


        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="services" style="display: flex">
    <div class="container">
            <h3>Services Overview</h3>
            <div class="row">
                <?php foreach($services as $service) { ?>
                    <div class="col-sm-6">
                        <div class="card services-card" style="width: 18rem;">
                            <?php  echo $this->Html->image($service['path'], ['class' => 'card-img-top','id'=>'serviceimg', 'style'=>'Height:100px', 'alt' => 'Service image']);
                            ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $service['Service_Title'] ?></h5>
                                <p class="card-text"><?= $this->Text->truncate(h($service['Service_Description']), 20, ['ellipsis' => '...',
                                        'exact' => false]) ?></p>
                                <?= $this->Html->link('More', ['controller' => 'Services', 'action'=> 'view'.'/'."$service[Service_id]"], ['class' => 'btn btn-primary']) ?>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
    </div>

    <div class="clearfix"> </div>
</div>
</div>
<div class="container" id="newsletter-signup">
    <h3>Sign Up to our Newsletter!</h3>
    <?= $this->element('Client/subscribe'); ?>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

</div>
</div>
<hr>
<div class="services container">
    <h3>Blogs</h3>
    <div style="padding-top: 10px; padding-bottom: 10px">
        <?php foreach ($blogs as $blog) { ?>

                <div class="d-flex w-100 justify-content-between">
                    <?= $this->Html->link(' ', ['controller' => 'BlogPost', 'action'=> 'view'.'/'."$blog[blog_post_id]"],['class'=>'list-group-item list-group-item-action']);?>
                    <h4><?= $blog['title'] ?></h4>
                    <small>Date Published: <?= $blog['created'] ?></small>
                    <p><?= $blog['Body'] ?></p>
                    <?= $this->Html->link('Read More', ['controller' => 'BlogPost', 'action'=> 'view'.'/'."$blog[blog_post_id]"],['class'=>'btn btn-primary']);?>

                </div>


            </a>
        <?php } ?>
    </div>
</div>



</body>
</html>
