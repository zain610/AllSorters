<?php
use Cake\ORM\TableRegistry;

$footer = TableRegistry::getTableLocator()->get('Footer');
$query = $footer->find();
?>

<div id="navigation">
    <div class="header-bottom">
        <div class="container" id="top-header" style="height: 20px">
            <div class="logo">
                <?php echo $this->Html->image('Allsorters_logo.png', ['alt' => 'Allsorters','align'=>'right','style'=>'margin-top:10px', 'url' => ['controller' => 'Articles', 'action' => 'home']]);?>
            </div>
            <div class="contact-info">

                <div class="contact-info-inner" style="">
                    <div style="display: grid;">
                        <h5>Reach out to Mary for more info!</h5>
                        <?php foreach ($query as $footer): ?>
                        <a style="margin-left: 1rem; color: #00adee" href="tel:<?php echo $footer->Phone; ?>"><i style="padding-right: 15px" class="fas fa-phone-alt fa-lg"></i><?= $footer->Phone ?></a>
                        <a style="margin-left: 1rem; color: #00adee" href="<?php echo $footer->Email; ?>"><i style="padding-right: 15px" class="far fa-envelope fa-lg"></i><?= $footer->Email?></a>
                        <?php endforeach;?>
                    </div>
                </div>

            </div>

        </div>
        <div class="container-fluid" id="navbar">
            <nav  class="navbar navbar-default" role="navigation">

                <!--/.navbar-header-->
                <div class="collapse navbar-collapse" id="nav-links" align="top">
                    <ul class="nav navbar-nav" id="navbar-contents">
                        <li><?= $this->Html->link('Services', ['controller' => 'Services', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Blog', ['controller' => 'Blogpost', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('About', ['controller' => 'About', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Gallery', ['controller' => 'GalleryPage', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Speaking Engagements', ['controller' => 'Events', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Tips', ['controller' => 'Tips', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Favourites', ['controller' => 'Favourites', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Testimonials', ['controller' => 'Review', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Contact', ['controller' => 'Request', 'action' => 'add'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>

                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>

    </div>

</div>
</div>
