<?php
$currentController = $this->request->getParam('controller');
$currentAction = $this->request->getParam('action');
$isDashboardActive = $currentController === "Admin" && $currentAction === 'index';
$isBlogsActive = $currentController === "Blogs";
$isServiceActive = $currentController === "Service";
$isImagesActive = $currentController === "Image";
$isReviewActive = $currentController === "Review";
$isJobActive = $currentController === "Job";
$isContractorActive = $currentController === "Contractor";
$isEventsActive = $currentController === "Events";
?>

<div class="sidebar-wrapper">
    <div class="logo" >
        <a href="/admin" class="simple-text">
            All Sorters
        </a>
    </div>
    <ul class="nav">
        <li id="search-wrapper" class="nav-item" style="display: none">

        </li>
        <li class="nav-item">
            <?= $this->Form->create(null, ['url' => ['prefix' => 'admin', 'controller' => 'BlogPost', 'action' => 'simpleSearch'], 'method' => 'GET']) ?>
            <input class="search form-control" type="text" name="query" />
            <?= $this->Form->end() ?>
            <a id="search-show" class="nav-link" href="#">
                <i class="fa fa-search"></i> Search
            </a>
        </li>
    </ul>
</div>
</div>
<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li>
                    <?= $this->Html->link(
                        '<p>Logout</p>',
                        ['prefix' => false, 'controller' => 'admin', 'action' =>'logout'],
                        ['escape' => false]
                    ) ?>
                </li>
            </ul>
        </div>
    </nav>




