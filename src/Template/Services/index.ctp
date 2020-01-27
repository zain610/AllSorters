<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service[]|\Cake\Collection\CollectionInterface $service
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Services</title>
</head>
<body>
<!-- header -->

<?php foreach ($webpages as $webpage): ?>
    <?php $name = $webpage -> Webpage;?>
    <?php if ($name === 'Services') { ?>
        <?php $heading = $webpage -> Heading; ?>
        <div class="services">
            <div class="container">
                <div class="camp">
                <h3> <?php echo $heading ?> </h3>
    <?php } ?>
<?php endforeach ?>
            <div id="searchBarNavBar" class="col-lg-12 col-md-12">
                <?= $this->element('Client/Buttons/search'); ?>
            </div>
            <?php foreach ($service as $service):?>
                <div class="col-lg-4 col-sm-6 minist-right">
<!--                    --><?php //debug($service->image);?>
                    <?php if (!empty($service->image)){
                        foreach ($service->image as $image):
                            echo $this->Html->image($image->path, ['class' => 'img-responsive','id'=>'serviceimg', 'alt' => 'Service image']);
                            break;
                        endforeach;
                    }
                    else
                    {    ?>
                        <img src="img/bg.jpg" class="img-responsive" id='serviceimg' alt="Services image">
                    <?php }?>


                    <h4><?php echo $service->Service_Title?></h4>
                    <p><?php echo $service->Service_Description?></p>

                    <a href='<?php echo $this->Url->build(array('action'=> 'View', $service->Service_id))?>' class="btn btn-special btn-lg">Read More <i class="fa fa-angle-right"></i></a>

                    <br />  <br />  <br />
                </div>
            <?php endforeach;?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>
</body>
</html>
