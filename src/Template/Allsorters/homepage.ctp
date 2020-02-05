
<div>
    <?php foreach($slideshow as $key=>$slideshow){
        $item[$key]=$slideshow;
    }?>

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
                <h1 class="text"><?php echo $item[0]['Captions'];?></h1>
            </div>


            <div class="item">
                <?php  echo $this->Html->image($item[1]['path'], ['alt' => $item[1]['Captions']]); ?>
                <h1 class="text"><?php echo $item[1]['Captions'];?></h1>
            </div>

            <div class="item">
                <?php  echo $this->Html->image($item[2]['path'], ['alt' => $item[2]['Captions']]); ?>
                <h1 class="text"><?php echo $item[2]['Captions'];?></h1>
            </div>

            <div class="item">
                <?php  echo $this->Html->image($item[3]['path'], ['alt' => $item[3]['Captions']]); ?>
                <h1 class="text"><?php echo $item[3]['Captions'];?></h1>
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
<hr>
<?php $heading = "" ?>
<?php $content = "" ?>
<?php foreach ($webpages as $webpage): ?>
    <?php $name = $webpage -> Webpage; ?>
    <?php if ($name === 'Home page') { ?>
        <?php $heading = $webpage -> Heading; ?>
        <?php $content = $webpage -> Content; ?>
    <?php } ?>
<?php endforeach ?>

<div class="" style="display: flex">
    <div class="container services inner-services " style="width: 70%; margin: 0 1rem; text-align: center; background: #f2f6ff;">
        <h3><?php echo $heading ?>
        </h3>
        <div>
            <p> <?php echo $content ?>
            </p>
        </div>
    </div>
    <?= $this->element('Client/blogs') ?>
</div>

</div>
<hr>
<div class="container-fluid" id="newsletter-signup">

    <div class="services" style="padding: 1rem 0">
        <h3>Sign Up to our Newsletter!</h3>

        <?= $this->element('Client/subscribe'); ?>
        <small id="emailHelp" class="form-text text-muted">*We'll never share your email with anyone else.</small>

    </div>

</div>
<hr>