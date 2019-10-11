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
foreach($reviews as $review) { ?>
    <div class="container">
        <a href="<?= $this->Url->build(['controller' => 'Review', 'action' => 'view', $review->Review_id]) ?>">
            <h2 class="post-title">
                Client Name: <?= h($review->Client_Name) ?>
            </h2>
            <?php if ($review->Suburb): ?>
                <h4 class="post-subtitle">
                    <?= $this->Text->truncate(strip_tags($review->Review_Details), 250, ['exact' => false]) ?>
                </h4>
            <?php endif ?>
        </a>
        <p>
        <p>Posted on <?= h($review->Month_Year) ?></p>
        </p>
    </div>
    <hr>
    <?php

} ?>

<!-- Pager -->
<div class="clearfix">
    <?= $this->Paginator->prev() ?>
    <?= $this->Paginator->next() ?>
</div>
