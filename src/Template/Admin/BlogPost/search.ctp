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
<div id="searchBarNavBar">
    <?= $this->element("Admin/Buttons/search"); ?>
</div>





<?php
foreach($blogs as $blog) { ?>
    <div class="container">
        <a href="<?= $this->Url->build(['controller' => 'BlogPost', 'action' => 'view', $blog->blog_post_id]) ?>">
            <h2 class="post-title">
                <?= h($blog->title) ?>
            </h2>
        </a>
        <p>
            <?= $this->Text->truncate(strip_tags($blog->body), 250, ['exact' => false]) ?>
        </p>
        <p class="post-meta">Posted <?= h($blog->created->timeAgoInWords()) ?></p>
    </div>
    <hr>
    <?php

//    echo $this->element('article-snippet', ['blog' => $blog]);
} ?>

<!-- Pager -->
<div class="clearfix">
    <?= $this->Paginator->prev() ?>
    <?= $this->Paginator->next() ?>
</div>
