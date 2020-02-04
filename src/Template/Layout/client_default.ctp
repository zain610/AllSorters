<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title', 'Welcome to UGIE!') ?>
    </title>

    <?= $this->Html->meta('icon') ?>

    <?php
        echo $this->Html->css('client2/animate.css');
        echo $this->Html->css('client2/bootstrap.css');
        echo $this->Html->css('client2/clientstyles.css');
        echo $this->Html->css('client2/flexslider.css');
        echo $this->Html->css('client2/icomoon.css');
        echo $this->Html->css('client2/owl.carousel.min.css');
        echo $this->Html->css('client2/owl.theme.default.min.css');
        echo $this->Html->css('client2/style.css');
        echo $this->Html->css('client2/themify-icons.css');
    ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?= $this->element('/Client/navbar'); ?>
<?= $this->fetch('content') ?>
<?= $this->element('/Client/footer'); ?>

</body>

<script type="text/javascript">
    $(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
        $('.has-dropdown').mouseenter(function(){

            var $this = $(this);
            $this
                .find('.dropdown')
                .css('display', 'block')
                .addClass('animated-fast fadeInUpMenu');

        }).mouseleave(function(){
            var $this = $(this);

            $this
                .find('.dropdown')
                .css('display', 'none')
                .removeClass('animated-fast fadeInUpMenu');
        });
        $("#newsletterModal").modal();

    });


</script>
</html>

