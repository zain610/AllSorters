<!DOCTYPE HTML>
<html>
<head>
    <title>Services</title>
    <link href="css/font-awesome.css" rel="stylesheet" />
</head>
<body>
<!-- header -->

<div class="services">
    <div class="container">
        <div class="camp">
            <h3>Services Overview</h3>
            <div id="searchBarNavBar">
                <?= $this->element('Client/Buttons/search'); ?>
            </div>
            <?php foreach ($service as $service):?>
            <div class="col-md-4 minist-right">
                <img src="img/bg.jpg" class="img-responsive" alt="">

                <h4><?php echo $service->Service_Title?></h4>
                <p><?php echo $service->Service_Description?></p>
                <a href='<?php echo $this->Url->build(array('action'=> 'View', $service->Service_id))?>' class="btn btn-default btn-lg ">Read More <i class="fa fa-angle-right"></i></a>

                <br />  <br />  <br />
                    </div>
            <?php endforeach;?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

</body>
</html>
