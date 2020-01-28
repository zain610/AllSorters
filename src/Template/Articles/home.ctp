


<div class="gtco-loader"></div>

<div id="page">

    <div class="gtco-container">
        <div class="row">
            <div class="col-lg-6 col-md-12 vert_line" style="padding-top: 10px">
                <div class="owl-carousel owl-carousel-fullwidth">
                    <?php foreach ($slideshow_arr as $slideshow):
                        foreach ($images as $image):
                            if($image->Image_id == $slideshow->Image_id):
                                $path = $image->path;
                            endif;
                        endforeach;
                        ?>

                        <div class="item">
                            <a href="#">
                                <?php echo $this->Html->image($path,['fullBase' => true])?>
                                <div class="slider-copy">
                                    <h2><?php echo strip_tags($slideshow->Captions)?></h2>
                                </div>
                            </a>
                        </div>

                    <?php endforeach?>

                </div>
            </div>


            <div class="col-lg-6 col-md-12 gtco-news">
                <h2 style="padding-top: 5px; color: #4d4d4d; font-weight: 300;font-size: 40px;">Recent Blogs </h2>
                <p>
                    <?php echo $this->Html->link(
                        'More Blogs',
                        ['controller'=>'BlogPost','action'=>'index'],
                        [
                            'escape' => false,
                            'class' => 'btn btn-sm btn-special',
                            'style' => 'position:absolute; 
                                        right:0%; 
                                        top:2%;'
                        ]
                    )?>
                </p>

                <br>
                <ul>
                    <?php foreach ($blogs as $blog):?>
                        <li>
                            <span class="post-date"><?php echo $blog->Date?></span>
                            <?php echo $this->Html->link(
                                '<h3 class="blog_Title">'. $blog->title.'</h3>',
                                ['controller'=>'BlogPost','action'=>'view/'.$blog->blog_post_id],
                                ['escape' => false]
                            )?>
                            <?php echo $this->Html->link(
                                '<p>'. $blog->Body.'</p>',
                                ['controller'=>'BlogPost','action'=>'view/'.$blog->blog_post_id],
                                ['escape' => false]
                            )?>
                        </li>
                    <?php endforeach;?>
                </ul>

            </div>
        </div>
    </div>

</div>



<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                <h2>About Us</h2>
                <?php foreach ($webpages as $webpage): ?>
                    <?php if($webpage->Webpage === "Home page") { ?>
                        <p><?= $webpage->Content ?></p>
                    <?php }?>
                <?php endforeach;?>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="owl-carousel owl-carousel-carousel">
                    <?php foreach ($gallery_images as $image): ?>
                        <div class="item">
                            <div class="gtco-item">
                                <?php echo $this->Html->image($image->path, ['class'=>'img-responsive']) ?>

                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END Work -->

<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-6 gtco-news">
                <h2>Services</h2>
                <ul>
                    <?php foreach($services as $service): ?>
                        <li><?php echo $this->Html->link(
                                '<h3 class="blog_Title">'.strip_tags($service->Service_Title).' </h3>',
                                ['controller'=>'Services','action'=>'view/'.$service->Service_id],
                                ['escape' => false]
                            )?>

                        </li>
                    <?php endforeach?>

                </ul>
                <p><a href="#" class="btn btn-sm btn-special">More Services</a></p>

            </div>
            <!-- END News -->
            <div class="col-md-6 col-md-push-1 gtco-testimonials">
                <h2>Testimonials</h2>
                <?php foreach ($reviews as $review):?>
                    <blockquote>

                        <p><?php echo $review->Review_Details?></p>
                        <p class="author"><cite><?php echo $review->Client_Name?>, <?php echo $review->Month_Year->format('d-m-Y')?></cite></p>
                    </blockquote>
                <?php endforeach;?>
                <p><?php echo $this->Html->link('More Testimonials',['controller'=>'Review','action'=>'index'],
                        ['escape' => false, 'class' => 'btn btn-sm btn-special', 'style' => 'position:absolute;'])?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END  -->


</div>
