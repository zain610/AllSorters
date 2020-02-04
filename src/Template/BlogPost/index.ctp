<html>
<head>
    <title>Blog</title>



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
        <hr>
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

                    <?php echo $this->Html->link('Read More',['controller'=>'BlogPost','action'=>'View',$blogPost],
                        ['escape' => false, 'class' => 'btn btn-special btn-lg'])?>
                </div>
                    <hr>
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
