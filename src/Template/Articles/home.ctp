<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>

</head>

<body>
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
<div class="" style="display: flex">
    <div class="container services inner-services " style="width: 70%; margin: 0 1rem; text-align: center; background: #f2f6ff;">
        <h3>Our Story</h3>
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div style="text-align: center">
                <h4>Our Services Include</h4>
                <h5><b>Moving // Downsizing // Aged Care // And many more ...</b> </h5>
            </div>
        </div>

    </div>
    <div class="container services inner-blogs" style="width: 30%; background-color: #f7d2e3; height: fit-content; margin-right: 0.75rem; border-radius: 15px;">
        <h3>Mary's Recent Blogs</h3>
        <div class="blogs-carousel ">
            <?php foreach ($blogs as $blog) { ?>
                <div class="card ">
                    <div class="card-body">
                        <h5 style="" class="card-title"><?= $blog['title'] ?></h5>
                        <div id="blog-card-content">
                            <p class="card-text"><?= $blog['Body'] ?></p>
                        </div>
                        <?= $this->Html->link('Read More', ['controller' => 'BlogPost', 'action'=> 'view'.'/'."$blog[blog_post_id]"],['class'=>'btn btn-primary']);?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <hr style="border: 2px solid #343a40; margin: 1rem">

    </div>
</div>

</div>
<hr>
<div class="container-fluid" id="newsletter-signup" style="margin-bottom: 1rem; background-color: #f2f6fe">

    <div style="display: flex;
    align-items: flex-end;
    justify-content: center; padding: 1rem 0">
        <h3>Sign Up to our Newsletter!</h3>

        <?= $this->element('Client/subscribe'); ?>
    </div>
    <small id="emailHelp" class="form-text text-muted">*We'll never share your email with anyone else.</small>

</div>
<hr>




</body>

</html>
