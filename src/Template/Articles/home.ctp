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
<?php foreach($slideshow as $key=>$slideshow){
    $item[$key]=$slideshow;
}?>

<div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>


        <div class="carousel-inner">
            <div class="item active">
                <?php  echo $this->Html->image($item[0]['path'], ['alt' => $item[0]['Captions']]); ?>
<!--                <img src="$item[0]['path]" alt="bg">-->
                <h1 class="text"><span><?php echo $item[0]['Captions'];?></span></h1>
            </div>

            <div class="item">
                <?php  echo $this->Html->image($item[1]['path'], ['alt' => $item[1]['Captions']]); ?>
                <h1 class="text"><span><?php echo $item[1]['Captions'];?></span></h1>
            </div>

            <div class="item">
                <?php  echo $this->Html->image($item[2]['path'], ['alt' => $item[2]['Captions']]); ?>
                <h1 class="text"><span><?php echo $item[2]['Captions'];?></span></h1>
            </div>

            <div class="item">
                <?php  echo $this->Html->image($item[3]['path'], ['alt' => $item[3]['Captions']]); ?>
                <h1 class="text"><span><?php echo $item[3]['Captions'];?></span></h1>
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
<div>
    <div class="services" style="display: flex">
        <div class="container" style="width: 65%">
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
        <div class="container" style="width: 35%; border-left:1px solid #000; background-color: #3fa5ce; border: 1px solid #333333">
            <h3>Recent Blogs</h3>
            <div class="blogs-carousel">
                <?php foreach ($blogs as $blog) { ?>
                    <div class="card ">
                        <div class="card-body">
                            <h5 style="" class="card-title"><?= $blog['title'] ?></h5>
                            <div id="blog-card-content">
                                <p class="card-text"><?= $blog['Body'] ?></p>
                                <p class="card-text"><small class="text-muted">Last updated on <?= $blog['created'] ?></small></p>
                            </div>
                            <?= $this->Html->link('Read More', ['controller' => 'BlogPost', 'action'=> 'view'.'/'."$blog[blog_post_id]"],['class'=>'btn btn-primary']);?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <hr style="border: 2px solid #343a40; margin: 1rem">
            <div class="container" id="newsletter-signup">
                <h3>Sign Up to our Newsletter!</h3>
                <?= $this->element('Client/subscribe'); ?>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

            </div>
        </div>
    </div>

</div>

</div>
<hr>



</body>

</html>
