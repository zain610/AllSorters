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
?>
<div id="searchBarNavBar">
    <?= $this->element("Admin/Buttons/search"); ?>
</div>




</div>

<?php
foreach($blogs as $blog) { ?>
    <div class="container">
        <a href="<?= $this->Url->build(['controller' => 'articles', 'action' => 'view', $blog->slug]) ?>">
            <h2 class="post-title">
                <?= h($blog->title) ?>
            </h2>
            <?php if ($blog->Description): ?>
                <h3 class="post-subtitle">
                    <?= h($blog->Description) ?>
                </h3>
            <?php endif ?>
        </a>
        <p>
            <?= $this->Text->truncate(strip_tags($blog->body), 250, ['exact' => false]) ?>
        </p>
        <p class="post-meta">Posted on <?= h($blog->created->toFormattedDateString()) ?></p>
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
