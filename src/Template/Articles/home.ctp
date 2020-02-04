


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
                <a href="./blog-post/">
                <h2 style="padding-top: 5px; color: #4d4d4d; font-weight: 300;font-size: 40px;margin-bottom: 0px">Recent Blogs </h2>
                </a>
                <br>
                <ul>
                    <?php foreach ($blogs as $blog):?>
                    <?php if ($blog->Published) { ?>

                    <?php $truncate = $this->Text->truncate(
                            $blog->Body,
                            $length=200,
                            array(
                                'ellipsis' => '...',
                                'exact' => false
                            )
                        );?>
                        <li>
                            <span class="post-date"><?php echo $blog->Date->format('d-m-Y')?></span>
                            <div>
                            <?php echo $this->Html->link(
                                '<h3 class="blog_Title">'. $blog->title.'</h3>',
                                ['controller'=>'BlogPost','action'=>'view/'.$blog->blog_post_id],
                                ['escape' => false,'style'=>"padding-bottom: 0px; margin-bottom: 0px"]
                            )?>
                            </div>
                            <?php echo $this->Html->link(
                                '<p>'. $truncate.'</p>',
                                ['controller'=>'BlogPost','action'=>'view/'.$blog->blog_post_id],
                                ['escape' => false,'style'=>"padding-bottom: 0px; margin-bottom: 0px"]
                            )?>
                        </li>
                        <?php } ?>
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
                <h2>
                    <?php foreach ($webpages as $webpage): ?>
                        <?php if($webpage->Webpage === "Home page") { ?>
                            <?= $webpage->Heading ?>
                        <?php }?>
                    <?php endforeach;?>
                </h2>
                <?php foreach ($webpages as $webpage): ?>
                    <?php if($webpage->Webpage === "Home page") { ?>
                        <p><?= $webpage->Content ?></p>
                    <?php }?>
                <?php endforeach;?>
            </div>
        </div>
        <div class="row">


        </div>
    </div>
</div>
<!-- END Work -->

<div class="gtco-section" style="padding-bottom: 100px">
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
                <?php $char = strlen($review->Review_Details)?>
                <?php if($char <= 250) {?>
                    <blockquote>

                        <p><?php echo $review->Review_Details?></p>
                        <p class="author"><cite><?php echo $review->Client_Name?>, <?php echo $review->Month_Year->format('d-m-Y')?></cite></p>
                    </blockquote>
                    <?php } ?>
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
