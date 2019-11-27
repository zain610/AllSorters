<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>

</head>
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

                </div>

                <div class="item">
                    <img src="img/dockland 5.3.2018.jpg" alt="Chicago">

                </div>

                <div class="item">
                    <img src="img/bg.jpg" alt="pete">

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
        <div class="camp">
            <h3>Services Overview</h3>
            <?php foreach($services as $service) { ?>
                <div class="col-lg-2 minist-right">
                    <?php  echo $this->Html->image($service['path'], ['class' => 'img-responsive','id'=>'serviceimg', 'alt' => 'Service image']);
                    ?>
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



</body>
</html>
