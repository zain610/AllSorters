<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleryPage[]|\Cake\Collection\CollectionInterface $galleryPage
 */
?>
<head>
    <title>Gallery</title>

</head>
<body>
<!-- banner -->
<div class="gallery" id="gallery">
    <div class="container">
        <div class="camp">
            <h3>Our Gallery</h3>
        </div>
        <div class="gallery-bottom">
            <div class="grid">
<!--                <div class="col-md-4 g-left">-->
<!--                    <div class="twentytwenty-wrapper"><div class="twentytwenty-container" style="height: 328px;">-->
<!--                            <img alt="Sample before" src="/img/6.jpg" class="twentytwenty-before" style="clip: rect(0px, 318.5px, 328px, 0px);">-->
<!--                            <img alt="Sample after" src="/img/6.jpg" class="twentytwenty-after">-->
<!--                            <div class="twentytwenty-overlay"><div class="twentytwenty-before-label"></div><div class="twentytwenty-after-label"></div></div><div class="twentytwenty-handle" style="left: 318.5px;"><span class="twentytwenty-left-arrow"></span><span class="twentytwenty-right-arrow"></span></div></div></div>-->
<!---->
<!---->
<!--                </div>-->
                <?php if(!empty($image)):?>
                <?php foreach ($image as $img):?>
                <div class="col-md-4 g-left">
<!--                    <a href="--><!--" rel="title" class="b-link-stripe b-animate-go  thickbox">-->
                        <figure class="effect-apollo">
                            <?php echo $this->Html->image($img->path, ['alt' => 'CakePHP']); ?>
                            <figcaption>
                            </figcaption>
                        </figure>
<!--                    </a>-->
                </div>
                <?php endforeach;?>
                <?php else:?>
                <div class="col-md-4 g-left">
                    <a href="img/6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
                        <figure class="effect-apollo">
                            <img src="img/6.jpg" alt="">
                            <figcaption>
                            </figcaption>

                        </figure>
                    </a>
                </div>
                <?php endif;?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
