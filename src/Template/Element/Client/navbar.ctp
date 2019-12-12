<div id="navigation">
    <div class="header-bottom">
        <div class="container" id="top-header" style="height: 20px">
            <div class="logo">
                <?php echo $this->Html->image('Allsorters_logo.png', ['alt' => 'Allsorters','align'=>'right','style'=>'margin-top:10px', 'url' => ['controller' => 'Articles', 'action' => 'home']]);?>
            </div>
            <div class="contact-info">

                <div class="contact-info-inner" style="padding: 1rem;  background-color: #212529; font-size: 20px">
                    <div style="display: flex;">
                        <h5>Reach out to Mary for more info!</h5>

                        <a style="margin-left: 1rem" href="tel:<?= $admin[0]['phone']?>"><i class="fas fa-phone-alt"></i></a>
                        <a style="margin-left: 1rem" href="mailto:abc@gmail.com"><i class="far fa-envelope"></i></a>

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
                        <li><?= $this->Html->link('Contact', ['controller' => 'Request', 'action' => 'add'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Speaking Engagements', ['controller' => 'Events', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Tips', ['controller' => 'Tips', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Favourites', ['controller' => 'Favourites', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Testimonials', ['controller' => 'Review', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>
                        <li><?= $this->Html->link('Book Shop', ['controller' => 'Product', 'action' => 'index'], ['class' => 'navbar-brand','style'=>'margin-top: -27px']) ?></li>

                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>

    </div>

</div>
</div>
