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
            <h4><?php echo $service->Service_Title?></h4>
            <h4><?php echo $service->Service_Description?></h4>
            <p><?php echo $service->Service_Detail?></p>
        </div>
            <div class="related  col-sm-6">
                <?php if (!empty($service->image)): ?>
                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                        <?php foreach ($service->image as $image): ?>
                            <tr>
                                <td class="card" width="50%">
                                    <?php echo $this->Html->image($image->path, ['alt' => 'CakePHP']); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        <div class="clearfix"> </div>

    </div>
</div>
</div>
</body>
</html>

