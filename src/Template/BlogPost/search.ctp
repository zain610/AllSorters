<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article[] $articles
 * @var string[] $tagList
 * @var string $query
 * @var int $selectedTagId
 */

$this->assign('heading', "Search Results");
$this->assign('heading-class', "page-heading compact-page-heading");
$this->assign('subheading', "Showing blogs that match \"{$query}\"");
$currentController = $this->request->getParam('controller');

?>
<link href="css/font-awesome.css" rel   ="stylesheet" />
<!-- CUSTOM STYLE CSS -->
<link href="css/styles.css" rel="stylesheet" />

<div class="services">
    <div class="container">
        <div class="row">
            <div id="searchBarNavBar">
                <?= $this->element('Client/Buttons/search'); ?>
            </div>
                <div class="col-md-12 col-lg-8 mb-5">
                    <?php foreach ($blogs as $blogPost): ?>
                        <?php $truncate = $this->Text->truncate(
                            $blog->Body,
                            $length=200,
                            array(
                                'ellipsis' => '...',
                                'exact' => false
                            )
                        );?>
                    <div class="blog-post">
                        <h2><?php echo $blogPost->title?></h2>
                        <h4>Posted by Mary Harnan on <?php echo $blogPost->Date->format('d-m-Y')?> </h4>
                        <p><?php echo $truncate?></p>

                        <a href='<?php echo $this->Url->build(array('action'=> 'View', $blogPost->blog_post_id))?>' class="btn btn-default btn-lg ">Read More <i class="fa fa-angle-right"></i></a>
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
<script src="js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="js/bootstrap.js"></script>
