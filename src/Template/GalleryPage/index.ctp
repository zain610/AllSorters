<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleryPage[]|\Cake\Collection\CollectionInterface $galleryPage
 */
?>
<head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gallery</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <?php echo $this->Html->script('baguetteBox.min.js')?>
    <?php echo $this->Html->css('baguetteBox.min.css')?>
    <?php echo $this->Html->css('gallery-grid.css')?>

</head>
<body>
<!-- banner -->

<?php foreach ($webpages as $webpage): ?>
    <?php $name = $webpage -> Webpage;?>
    <?php if ($name === 'Gallery') { ?>
        <?php $heading = $webpage -> Heading; ?>
        <div class="services">
            <div class="container">
                <h3> <?php echo $heading ?> </h3>
            </div>
        </div>
    <?php } ?>
<?php endforeach ?>

<div class="container gallery-container" style="margin-bottom: 30px">

    <div class="tz-gallery">
        <div class="row">
                <?php if(!empty($image)):?>
                    <?php foreach ($image as $img):?>
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/<?php echo $img->path ?>" data-caption="<?php echo (is_null($img->gallery_title) ? ('placeholder') :  ($img->gallery_title) );?>">
                            <?php echo $this->Html->image($img->path, ['alt' => 'CakePHP',"class"=>"cropped"]); ?>
                        </a>
                </div>
                    <?php endforeach;?>
                <?php else:?>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/6.jpg?>">
                            <img src="img/6.jpg" alt="">
                        </a>
                    </div>

                <?php endif;?>
            </div>



    </div>

</div>

<!-- END Work -->
<hr>
<div class="gtco-section" style="padding-bottom: 100px">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-6 gtco-news">
                <h2>Recent Blog Posts</h2>
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
                                        ['escape' => false,'style'=>"padding-bottom: 0px"]
                                    )?>
                                </div>
                                <?php echo $this->Html->link(
                                    '<p>'. $truncate.'</p>',
                                    ['controller'=>'BlogPost','action'=>'view/'.$blog->blog_post_id],
                                    ['escape' => false]
                                )?>
                            </li>
                        <?php } ?>
                    <?php endforeach;?>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
