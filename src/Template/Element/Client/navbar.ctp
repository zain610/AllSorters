
<div class="header-bottom" >
    <div class="container">

        <nav  class="navbar navbar-default" role="navigation">
            <div class="logo">
                <?php echo $this->Html->image('Allsorters_logo.png', ['alt' => 'Allsorters','align'=>'right']);?>
            </div>
            <!--/.navbar-header-->
            <div id="navbar" class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" align="top">
                <ul class="nav navbar-nav" id="navbar-contents">
                    <li><?= $this->Html->link('Home', ['controller' => 'Articles', 'action' => 'home'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Services', ['controller' => 'Services', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Blog', ['controller' => 'Blogpost', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('About', ['controller' => 'About', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Gallery', ['controller' => 'GalleryPage', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Contact', ['controller' => 'Request', 'action' => 'add'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Speaking Engagements', ['controller' => 'Events', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
    </div>
</div>
