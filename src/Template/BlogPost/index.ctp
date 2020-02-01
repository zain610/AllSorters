<html>
<head>
    <title>Blog</title>

    <!-- BOOTSTRAP CORE STYLE -->

    <!-- FONT AWESOME ICON STYLE -->
    <link href="css/font-awesome.css" rel   ="stylesheet" />


</head>
<body>
<div class="services">
<div class="container">
    <div id="searchBarNavBar">
        <?php foreach ($webpages as $webpage): ?>
            <?php $name = $webpage -> Webpage;?>
            <?php if ($name === 'Blogs') { ?>
                <?php $heading = $webpage -> Heading; ?>
                        <h3> <?php echo $heading ?> </h3>
            <?php } ?>
        <?php endforeach ?>

            <?= $this->element('Client/Buttons/search'); ?>
            <div class="col-md-12 col-lg-8 mb-5">
                <?php foreach ($blogPost as $blogPost): ?>
                    <?php $truncate = $this->Text->truncate(
                        $blogPost->Body,
                        $length=200,
                        array(
                            'ellipsis' => '...',
                            'exact' => false
                        )
                    );?>
                <div class="blog-post">
                    <h2><?php echo $blogPost->title?></h2>
                    <h4>Posted by Mary on <?php echo $blogPost->Date->format('d-m-Y')?> </h4>
                    <p><?php echo $truncate?></p>

                    <a href='<?php echo $this->Url->build(array('action'=> 'View', $blogPost->blog_post_id))?>' class="btn btn-special btn-lg">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <?php endforeach; ?>
            <br />
                <nav>
                    <div class="paginator">
                        <ul class="pagination justify-content-center pagination-lg">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                    </div>
                </nav>
        </div>
    </div>
</div>
</div>

    </div>
</div>

</div>
</body>
</html>
