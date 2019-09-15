<?php
$currentController = $this->request->getParam('controller');
$currentAction = $this->request->getParam('action');
$isDashboardActive = $currentController === "Admin" && $currenAction === 'index';
$isBlogsActive = $currentController === "Blogs";
$isServicesActive = $currentController === "Services";
$isImagesActive = $currentController === "Images";
$isReviewsActive = $currentController === "Reviews";

?>

<div class="sidebar-wrapper">
    <div class="logo" >
        <a href="/admin" class="simple-text">
            All Sorters
        </a>
    </div>
    <ul class="nav">
        <li class="<?= $isDashboardActive ? 'active' : '' ?>">
            <a href="dashboard.html">
                <i class=""></i>
                <p>Services</p>
            </a>
        </li>
        <li class="<?= $isBlogsActive ? 'active' : '' ?>">
            <?= $this->Html->link(
                '<p>Blogs</p>',
                'articles/home',
                ['escape' => false]
            ) ?>
        </li>
        <li>
            <a href="table.html">
                <i class=""></i>
                <p>Images</p>
            </a>
        </li>

        <li class="<?= $isReviewsActive ? 'active' : '' ?>">
            <?= $this->Html->link(
                '<p>Reviews</p>',
                '/admin/review',
                ['escape' => false]
            ) ?>
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




