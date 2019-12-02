<head>
</head>
<body>
<div class="header-bottom">
    <div class="container" style="width: 1400px">
        <div class="logo">
        <?php echo $this->Html->image('Allsorters_logo.png', ['alt' => 'Allsorters','align'=>'right']);?>
        </div>
        <nav class="navbar navbar-default" role="navigation">
            <!--/.navbar-header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" align="top" style="font-size: 20px; margin-top: -15px">
                <ul class="nav navbar-nav" id="navbar-contents">
                    <li><?= $this->Html->link('Home', ['controller' => 'Articles', 'action' => 'home'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Services', ['controller' => 'Services', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Blog', ['controller' => 'Blogpost', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('About Us', ['controller' => 'About', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Gallery', ['controller' => 'GalleryPage', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Contact', ['controller' => 'Request', 'action' => 'add'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Speaking Engagements', ['controller' => 'Events', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Tips', ['controller' => 'Tips', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Favourites', ['controller' => 'Favourites', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>

                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
    </div>
</div>

</body>
