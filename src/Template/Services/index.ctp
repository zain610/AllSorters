<!DOCTYPE HTML>
<html>
<head>
    <title>Services</title>
    <link href="css/font-awesome.css" rel="stylesheet" />
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
            <div id="searchBarNavBar" class="col-md-12">
                <?= $this->element('Client/Buttons/search'); ?>
            </div>
            <?php foreach ($service as $service):?>
                <div class="col-md-4 minist-right">
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

                    <a href='<?php echo $this->Url->build(array('action'=> 'View', $service->Service_id))?>' class="btn btn-primary btn-lg">Read More <i class="fa fa-angle-right"></i></a>

                    <br />  <br />  <br />
                </div>
            <?php endforeach;?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

</body>
</html>
