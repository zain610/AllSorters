<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About[]|\Cake\Collection\CollectionInterface $about
 */
?>
<!DOCTYPE HTML>
<!--
	Aesthetic by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
<head>

</head>
<body>

<!--<div class="gtco-loader"></div>-->
<?php //foreach ($webpages as $webpage): ?>
<!--    --><?php //$name = $webpage -> Webpage;?>
<!--    --><?php //if ($name === 'About') { ?>
<!--        --><?php //$heading = $webpage -> Heading; ?>
<!--        <div class="services">-->
<!--            <div class="container">-->
<!--                <h3> --><?php //echo $heading ?><!-- </h3>-->
<!--            </div>-->
<!--        </div>-->
<!--    --><?php //} ?>
<?php //endforeach ?>

<?php foreach ($about as $about): ?>


<div id="page">


    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row gtco-heading">
                <div class="col-md-12 text-left">
                    <h2 align="middle"><?php echo $about->Title ?></h2>
                    <p style="padding-top: 10px">
                        <img src="img/staff_1.jpg" align="left" class="img-responsive" style="padding-right: 20px" width="500px">
                        <?php echo $about->Content ?>
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- END .gtco-services -->
<?php endforeach ?>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>


</body>
</html>

