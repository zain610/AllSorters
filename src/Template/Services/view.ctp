<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<html>
<head>
    <title>Services</title>

</head>
<body>
<!-- header -->
<div class="services">
    <div class="container">
        <div class="camp1">
        <h3>Our Services</h3>

        <div class="well">
            <h1><?php echo $service->Service_Title?></h1>
            <p><?php echo $service->Service_Detail?></p>
        </div>
        <div class="clearfix"> </div>

    </div>
</div>
</div>
</body>
</html>

