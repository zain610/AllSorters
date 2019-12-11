<div id="navigation">
    <div class="header-bottom">
        <div class="container" id="top-header" style="height: 20px">
            <div class="logo">
                <?php echo $this->Html->image('Allsorters_logo.png', ['alt' => 'Allsorters','align'=>'right','style'=>'margin-top:10px']);?>
            </div>
            <div class="contact-info">

                <div class="contact-info-inner">
                    <h4>Contact Me! </h4>
                    <h5>+123456789</h5>
                </div>
            </div>

        </div>
        <div class="container-fluid" id="navbar">
            <nav  class="navbar navbar-default" role="navigation">

                <!--/.navbar-header-->
                <div class="collapse navbar-collapse" id="nav-links" align="top">
                    <ul class="nav navbar-nav" id="navbar-contents">
                        <li><?= $this->Html->link('Home', ['controller' => 'Articles', 'action' => 'home'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Services', ['controller' => 'Services', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Blog', ['controller' => 'Blogpost', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('About', ['controller' => 'About', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Gallery', ['controller' => 'GalleryPage', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Contact', ['controller' => 'Request', 'action' => 'add'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Speaking Engagements', ['controller' => 'Events', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Tips', ['controller' => 'Tips', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Favourites', ['controller' => 'Favourites', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Book Shop', ['controller' => 'Product', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>

                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>

        </div>

    </div>
</div>
