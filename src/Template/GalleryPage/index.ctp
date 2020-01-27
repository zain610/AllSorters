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

    <title>Freebie: 4 Bootstrap Gallery Templates</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="/../css/gallery-grid.css">
    <link rel="stylesheet" href="/../css/baguetteBox.min.css">
    <script src="/../js/baguetteBox.min.js"></script>

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

<div class="container gallery-container">

    <div class="tz-gallery">
        <div class="row">
                <?php if(!empty($image)):?>
                    <?php foreach ($image as $img):?>
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="/img/<?php echo $img->path ?>">
                            <?php echo $this->Html->image($img->path, ['alt' => 'CakePHP']); ?>
                        </a>
                </div>
                    <?php endforeach;?>
                <?php else:?>
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="img/6.jpg ?>">
                            <img src="img/6.jpg" alt="">
                        </a>
                    </div>

                <?php endif;?>
            </div>



    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
