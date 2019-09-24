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
<div class="large-search-wrapper">
    <div class="row input-group mb-3" style="">
        <div class="input-group-prepend">
            <button id="button-addon2" type="submit" class="btn btn-link text-warning"><i class="fa fa-search"></i></button>
        </div>
        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
    </div>
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
