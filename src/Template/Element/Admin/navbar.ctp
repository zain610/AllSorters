<?php
$currentController = $this->request->getParam('controller');
$currentAction = $this->request->getParam('action');
$isDashboardActive = $currentController === "Admin" && $currenAction === 'index';
$isServicesActive = $currentController === "Services";
$isImagesActive = $currentController === "Images";
$isReviewsActive = $currentController === "Reviews";

?>

<div class="sidebar-wrapper">
    <div class="logo">
        <a href="#" class="simple-text">
            All Sorters
        </a>
    </div>

    <ul class="nav">
        <li class="active">
            <a href="dashboard.html">
                <i class=""></i>
                <p>Services</p>
            </a>
        </li>
        <li>
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
        <li>
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
                    <a href="">
                        Account
                    </a>
                </li>
                <li>
                    <a href="">
                        Log out
                    </a>
                </li>
            </ul>
        </div>
    </nav>
