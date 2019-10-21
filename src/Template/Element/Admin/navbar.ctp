<?php
$currentController = $this->request->getParam('controller');
$currentAction = $this->request->getParam('action');
$isDashboardActive = $currentController === "Admin" && $currentAction === 'index';
$isBlogsActive = $currentController === "Blogs";
$isServiceActive = $currentController === "Services";
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
        <li class="<?= $isDashboardActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Dashboard</p>',
                ['prefix' => false, 'controller' => 'Admin', 'action' => 'index'],
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
                        '<p>View Blog Posts</p>',
                        ['prefix'=>'admin','controller'=>'BlogPost','action'=>'index'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>Add a Blog Post</p>',
                        ['prefix'=>'admin','controller'=>'BlogPost','action'=>'add'],
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
            <ul class="dropdown-menu" aria-labelledby="imageDropdown">
                <li><?= $this->Html->link(
                        '<p>View Images</p>',
                        // '/admin/image/',
                        ['prefix'=>'admin','controller' => 'image', 'action' => 'index'],
                        ['escape' => false]
                    ) ?></li>
                <li><?= $this->Html->link(
                        '<p>Add Images</p>',
                        // '/admin/image/upload/',
                        //['prefix'=>'admin','controller' => 'Image', 'action' => 'upload'],
                        ['prefix'=>'admin','controller' => 'image', 'action' => 'upload'],
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
                        ['prefix' => 'admin','controller' => 'Services', 'action' => 'index'],
                        ['escape' => false]
                    ) ?></li>
                <li><?= $this->Html->link(
                        '<p>Add Services</p>',
                        ['prefix' => 'admin','controller' => 'Services', 'action' => 'add'],
                        ['escape' => false]
                    ) ?></li>
            </ul>
        </li>


        <li id="dropDownMenu" class="<?= $isJobActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Jobs</p>',
                '#',
                ['onclick' => 'handleMenuToggle(this)', 'escape' => false,  'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true']
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="ServiceDropdown">
                <li><?= $this->Html->link(
                        '<p>View Jobs</p>',
                        ['prefix' => 'admin','controller' => 'Job', 'action' => 'index'],
                        ['escape' => false]
                    ) ?></li>
                <li><?= $this->Html->link(
                        '<p>Add Jobs</p>',
                        ['prefix' => 'admin','controller' => 'Job', 'action' => 'add'],
                        ['escape' => false]
                    ) ?></li>
            </ul>
        </li>


        <li id="dropDownMenu" class="<?= $isContractorActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Contractors</p>',
                '#',
                ['onclick' => 'handleMenuToggle(this)', 'escape' => false,  'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true']
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="ServiceDropdown">
                <li><?= $this->Html->link(
                        '<p>View Contractors</p>',
                        ['prefix' => 'admin','controller' => 'Contractor', 'action' => 'index'],
                        ['escape' => false]
                    ) ?></li>
                <li><?= $this->Html->link(
                        '<p>Add Contractors</p>',
                        ['prefix' => 'admin','controller' => 'Contractor', 'action' => 'add'],
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
        <li id="dropDownMenu" class="<?= $isEventsActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Speaking engagements</p>',
                '#',
                ['escape' => false, 'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true',]
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="eventsDropdown">
                <li><?=$this->Html->link(
                        '<p>View Speaking engagements</p>',
                        ['prefix'=>'admin','controller'=>'Events','action'=>'index'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>Add a Speaking engagement</p>',
                        ['prefix'=>'admin','controller'=>'Events','action'=>'add'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>View Speaking engagements Archive</p>',
                        ['prefix'=>'admin','controller'=>'Events','action'=>'archiveIndex'],
                        ['escape'=>false]
                    )?></li>
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
