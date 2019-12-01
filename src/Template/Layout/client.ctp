<!DOCTYPE HTML>
<html>
<head>
    <title><?= $this->fetch('title', 'Welcome to AllSorters') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="AllSorters, Senior Citizens, Aged Care, " />
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('client_tempate_styling.css') ?>
    <?= $this->Html->css('flexslider.css') ?>
    <?= $this->Html->css('chocolat.css') ?>
    <?= $this->Html->css('clientStyles.css') ?>


    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>



</head>
<body>
<?= $this->element('Client/navbar'); ?>
        <!-- FlexSlider -->
<?= $this->fetch('content') ?>
<?= $this->element('Client/footer'); ?>



</body>
<?= $this->Html->script('jquery-3.4.1.min.js') ?>
<?= $this->Html->script('bootstrap.js') ?>
<?= $this->Html->script('move-top.js') ?>
<?= $this->Html->script('easing.js') ?>
<script type="text/javascript">
    $(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
        */
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>

<?= $this->Html->script('modernizr.custom.97074.js') ?>
<?= $this->Html->script('jquery.chocolat.js') ?>
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('.g-left a').Chocolat();
    });
</script>


</html>
