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
        <h3>Blog</h3>

            <?= $this->element('Client/Buttons/search',array(['class'=>'btn btn-primary'])); ?>
            <div class="col-md-12 col-lg-8 mb-5">
                <?php foreach ($blogPost as $blogPost): ?>
                <div class="blog-post">
                    <h2><?php echo $blogPost->title?></h2>
                    <h4>Posted by Mary on <?php echo $blogPost->Date?> </h4>
                    <p><?php echo $blogPost->Description?></p>

                    <a href='<?php echo $this->Url->build(array('action'=> 'View', $blogPost->blog_post_id))?>' class="btn btn-primary btn-lg">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <?php endforeach; ?>
            <br />
            <nav>
                <div class="paginator">
                    <ul class="pagination">
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
