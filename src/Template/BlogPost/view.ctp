<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<html>
<head>
    <title>Blog</title>
</head>
<body>

<div class="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
            <h3>Blog</h3>

            <div class="well">
                <h4><?php echo $blogPost->title?></h4>
                <p><?php echo $blogPost->Description?></p>
                <a><?php echo $blogPost->Body?></a>
            </div>
                <div class="related">
                    <?php if (!empty($blogPost->image)): ?>
                        <table cellpadding="0" cellspacing="0">
                            <tbody>
                            <?php foreach ($blogPost->image as $image): ?>
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
    <!-- footer -->


    <!-- footer -->
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
</body>
</html>

