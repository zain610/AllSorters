<head>
</head>
<body>
<div class="header-bottom">
    <div class="container" style="width: 1400px">
        <div class="logo">
<h1><?= $this->Html->link('All Sorters', ['controller' => 'Articles', 'action' => 'home']) ?>
        </div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!--/.navbar-header-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="navbar-contents">
                    <li><?= $this->Html->link('Home', ['controller' => 'Articles', 'action' => 'home'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Services', ['controller' => 'Services', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Blog', ['controller' => 'Blogpost', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('About', ['controller' => 'About', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Gallery', ['controller' => 'gallery', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Contact', ['controller' => 'Request', 'action' => 'add'], ['class' => 'navbar-brand']) ?></li>
                    <li><?= $this->Html->link('Speaking Engagements', ['controller' => 'Events', 'action' => 'index'], ['class' => 'navbar-brand']) ?></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
    </div>
</div>

</body>
