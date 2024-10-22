<?php
$currentController = $this->request->getParam('controller');
$currentAction = $this->request->getParam('action');
$isDashboardActive = $currentController === "Admin" && $currentAction === 'index';
$isBlogsActive = $currentController === "Blogs";
$isServiceActive = $currentController === "Services";
$isImagesActive = $currentController === "Image";
$isReviewActive = $currentController === "Review";
$isEventsActive = $currentController === "Events";
$isQueriesActive = $currentController === "Queries";
$isNewslettersActive = $currentController === "Newsletter";
$isSlideShowActive = $currentController === "SlideShow";
$isFooterActive = $currentController === "Footer";
$isAboutActive = $currentController === "About";
$isTipsActive = $currentController === "Tips";
$isFavouritesActive = $currentController === "Favourites";
$isProductActive = $currentController === "Product";
$isChangePWActive = $currentController === "Admin" && $currentAction === 'changepassword';
$isWebpagesActive = $currentController === "Webpages";
$isJobActive = $currentController === "Job";


?>


<div class="sidebar-wrapper">
    <div class="logo" >
        <?php echo $this->Html->link(
            'AllSorters',
            ['controller' => 'Admin', 'action' => 'index'],['class'=>'simple-text']
        );?>

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
                        '<p>View Blog Post archive</p>',
                        ['prefix'=>'admin','controller'=>'BlogPost','action'=>'archiveIndex'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>View Blog Post Comments</p>',
                        ['prefix'=>'admin','controller'=>'BlogPost','action'=>'displayComments'],
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
                        '/admin/image/',
//                        ['prefix'=>'admin','controller' => 'image', 'action' => 'index'],
                        ['escape' => false]
                    ) ?></li>
                <li><?= $this->Html->link(
                        '<p>Add Images</p>',
                        '/admin/image/upload/',
                        //['prefix'=>'admin','controller' => 'Image', 'action' => 'upload'],
                        ['escape' => false]
                    ) ?></li>
                <li><?= $this->Html->link(
                        '<p>Manage Slide Show</p>',
                        ['prefix'=>'admin','controller' => 'Slideshow','action'=>'index'],
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
                        '<p>Add Services</p>',
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

        <li class="<?= $isJobActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Jobs</p>',
                '#',
                ['escape' => false, 'onclick' => 'handleMenuToggle(this)', 'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true',]
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="reviewDropdown">
                <li><?=$this->Html->link(
                        '<p>View Incomplete Jobs</p>',
                        ['prefix'=>'admin','controller'=>'job','action'=>'index'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>Add a Job</p>',
                        ['prefix'=>'admin','controller'=>'job','action'=>'add'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>View Completed Jobs</p>',
                        ['prefix'=>'admin','controller'=>'job','action'=>'archiveIndex'],
                        ['escape'=>false]
                    )?></li>
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
                        '<p>Archived Speaking Engagements </p>',
                        ['prefix'=>'admin','controller'=>'Events','action'=>'archiveIndex'],
                        ['escape'=>false]
                    )?></li>
            </ul>
        </li>


        <li class="<?= $isQueriesActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Queries</p>',
                ['prefix' => 'admin', 'controller' => 'request', 'action' => 'index'],
                ['escape' => false]
            ) ?>
        </li>

        <li class="<?= $isNewslettersActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Send Newsletters</p>',
                ['prefix' => 'admin', 'controller' => 'subscriptions', 'action' => 'index'],
                ['escape' => false]
            ) ?>
        </li>



        <li id="dropDownMenu" class="<?= $isAboutActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>About Us</p>',
                '#',
                ['escape' => false, 'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true',]
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                <li><?=$this->Html->link(
                        '<p>View About Us</p>',
                        ['prefix'=>'admin','controller'=>'about','action'=>'index'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>Add to About Us</p>',
                        ['prefix'=>'admin','controller'=>'about','action'=>'add'],
                        ['escape'=>false]
                    )?></li>
            </ul>

        </li>
        <li id="dropDownMenu" class="<?= $isTipsActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Tips</p>',
                '#',
                ['escape' => false, 'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true',]
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                <li><?=$this->Html->link(
                        '<p>View Tips</p>',
                        ['prefix'=>'admin','controller'=>'tips','action'=>'index'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>Add to Tips</p>',
                        ['prefix'=>'admin','controller'=>'tips','action'=>'add'],
                        ['escape'=>false]
                    )?></li>
            </ul>
        <li id="dropDownMenu" class="<?= $isFavouritesActive ? 'active' : '' ?> dropdown">
            <?= $this->Html->link(
                '<p>Favourites</p>',
                '#',
                ['escape' => false, 'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true',]
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                <li><?=$this->Html->link(
                        '<p>View Favourites</p>',
                        ['prefix'=>'admin','controller'=>'favourites','action'=>'index'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>Add to Favourites</p>',
                        ['prefix'=>'admin','controller'=>'favourites','action'=>'add'],
                        ['escape'=>false]
                    )?></li>
            </ul>

        </li>

        <li id="dropDownMenu" class="<?= $isWebpagesActive ? 'active' : '' ?> <?= $isChangePWActive ? 'active' : '' ?> <?= $isFooterActive ? 'active' : '' ?>  dropdown">
            <?= $this->Html->link(
                '<p>Settings</p>',
                '#',
                ['escape' => false, 'class'=>"dropdown-toggle", 'data-toggle'=>"dropdown", 'aria-expanded' => 'true',]
            ) ?>
            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                <li><?=$this->Html->link(
                        '<p>Change Profile</p>',
                        ['prefix' => false, 'controller' => 'admin', 'action' => 'changeprofile'],
                        ['escape'=>false]
                    )?></li>
                <li><?=$this->Html->link(
                        '<p>Change Password</p>',
                        ['prefix' => false, 'controller' => 'admin', 'action' => 'changepassword'],
                        ['escape'=>false]
                    )?></li>

                <li><?=$this->Html->link(
                        '<p>Footer</p>',
                        ['prefix' => 'admin', 'controller' => 'Footer', 'action' => 'edit'],
                        ['escape'=>false]
                    )?></li>

                <li><?=$this->Html->link(
                        '<p>Manage Webpage Content</p>',
                        ['prefix' => false, 'controller' => 'Admin', 'action' => 'Webpages'],
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




