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




</div>

<?php
foreach($services as $service) { ?>
    <div class="container">
        <a href="<?= $this->Url->build(['controller' => 'Service', 'action' => 'view', $service->Service_id]) ?>">
            <h2 class="post-title">
                <?= h($service->Service_Title) ?>
            </h2>
        </a>
        <p>
            <?= $this->Text->truncate(strip_tags($service->Service_Detail), 250, ['exact' => false]) ?>
        </p>
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
