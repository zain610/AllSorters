<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title', 'Welcome to UGIE!') ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('clientstyles.css') ?>
    <?= $this->Html->css('flexslider.css') ?>
    <?= $this->Html->css('icomoon.css') ?>
    <?= $this->Html->css('owl.carousel.min.css') ?>
    <?= $this->Html->css('owl.theme.default.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('themify-icons.css') ?>


    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?= $this->element('Client/navbar'); ?>
<?= $this->fetch('content') ?>
<?= $this->element('Client/footer'); ?>
</body>
</html>
