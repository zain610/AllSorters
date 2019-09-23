<?php
$currentController = $this->request->getParam('controller');
$currentAction = $this->request->getParam('action');
$isDashboardActive = $currentController === "Admin" && $currentAction === 'index';
$isBlogsActive = $currentController === "Blogs";
$isServiceActive = $currentController === "Service";
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
        <li class="<?= $isDashboardActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Dashboard</p>',
                'admin',
                ['escape' => false]
            ) ?>
        </li>
        <li class="<?= $isBlogsActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Blogs</p>',
                '#',
                ['escape' => false, 'onclick' => 'handleMenuToggle(this)', 'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true',]
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="reviewDropdown">
                <li><?=$this->Html->link(
                        '<p>Add a Blog Post</p>',
                        ['prefix'=>'admin','controller'=>'BlogPost','action'=>'add'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>View Blog Posts</p>',
                        ['prefix'=>'admin','controller'=>'BlogPost','action'=>'index'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>View Blog Post Archive</p>',
                        ['prefix'=>'admin','controller'=>'BlogPost','action'=>'archiveIndex'],
                        ['escape'=>false]
                    )?></li>

            </ul>
        </li>
        <li class="<?= $isImagesActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Images</p>',
                '#',
                ['escape' => false, 'onclick' => 'handleMenuToggle(this)', 'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true',]
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="reviewDropdown">
                <li><?= $this->Html->link(
                        '<p>View Image</p>',
                        ['prefix' => 'admin','controller' => 'image', 'action' => 'view'],
                        ['escape' => false]
                    ) ?></li>
                <li><?= $this->Html->link(
                        '<p>Add Image</p>',
                        ['prefix' => 'admin','controller' => 'image', 'action' => 'upload'],
                        ['escape' => false]
                    ) ?></li>

            </ul>
        </li>

        <li id="dropDownMenu" class="<?= $isServiceActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Services</p>',
                '#',
                ['onclick' => 'handleMenuToggle(this)', 'escape' => false,  'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true']
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="ServiceDropdown">
                <li><?= $this->Html->link(
                        '<p>View Services</p>',
                        ['prefix' => 'admin','controller' => 'Service', 'action' => 'index'],
                        ['escape' => false]
                    ) ?></li>
                <li><?= $this->Html->link(
                        '<p>Add reviews</p>',
                        ['prefix' => 'admin','controller' => 'Service', 'action' => 'add'],
                        ['escape' => false]
                    ) ?></li>
            </ul>
        </li>

        <li id="dropDownMenu" class="<?= $isReviewActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Reviews</p>',
                '#',
                ['onclick' => 'handleMenuToggle(this)', 'escape' => false,  'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true']
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="reviewDropdown">
                <li><?= $this->Html->link(
                        '<p>View reviews</p>',
                        ['prefix' => 'admin','controller' => 'Review', 'action' => 'index'],
                        ['escape' => false]
                    ) ?></li>
                <li><?= $this->Html->link(
                        '<p>Add reviews</p>',
                        ['prefix' => 'admin','controller' => 'Review', 'action' => 'add'],
                        ['escape' => false]
                    ) ?></li>
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




