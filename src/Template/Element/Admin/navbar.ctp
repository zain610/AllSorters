<?php
$currentController = $this->request->getParam('controller');
$currentAction = $this->request->getParam('action');
$isDashboardActive = $currentController === "Admin" && $currentAction === 'index';
$isBlogsActive = $currentController === "Blogs";
$isServicesActive = $currentController === "Services";
$isImagesActive = $currentController === "Images";
$isReviewActive = $currentController === "Review";

?>

<div class="sidebar-wrapper">
    <div class="logo" >
        <a href="/admin" class="simple-text">
            All Sorters
        </a>
    </div>
    <ul class="nav">
        <li class="<?= $isDashboardActive ? 'active' : '' ?>">
            <?= $this->Html->link(
                '<p>Dashboard</p>',
                'admin',
                ['escape' => false]
            ) ?>
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

        <li id="reviewDropdownMenu" class="<?= $isReviewActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Reviews</p>',
                '#',
                ['escape' => false, 'id' => 'reviewDropdown',  'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true', 'role' => 'button', 'aria-haspopup'=>"true"]
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="reviewDropdown">
                <li><a href="#">Notification 1</a></li>
                <li><a href="#">Notification 2</a></li>
                <li><a href="#">Notification 3</a></li>
                <li><a href="#">Notification 4</a></li>
                <li><a href="#">Another notification</a></li>
            </ul>
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




