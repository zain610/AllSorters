<?php
use Cake\ORM\TableRegistry;
?>


    <!-- Modernizr JS -->
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <![endif]-->

</head>
<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">

        <div class="row">
            <div class="col-sm-2 col-xs-12">
                <div id="gtco-logo"><?= $this->Html->link('Allsorters', ['controller' => 'Articles', 'action' => 'home']) ?></div>

            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <!--                        class="active"-->
                    <li class="active"><?= $this->Html->link('Home', ['controller' => 'Articles', 'action' => 'home']) ?></li>
                    <li><?= $this->Html->link('About', ['controller' => 'About', 'action' => 'index']) ?></li>
                    <li class="has-dropdown">
                        <a href="#">Services</a>
                        <ul class="dropdown">
                            <li><?= $this->Html->link('Service1', ['controller' => 'Service', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link('Service2', ['controller' => 'Service', 'action' => 'index']) ?></li>
                            <li><?= $this->Html->link('Service3', ['controller' => 'Service', 'action' => 'index']) ?></li>
                        </ul>
                    </li>
                    <li class="has-dropdown">
                        <a href="#">Dropdown</a>
                        <ul class="dropdown">
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">Sass</a></li>
                            <li><a href="#">jQuery</a></li>
                        </ul>
                    </li>
                    <li><?= $this->Html->link('Login', ['controller' => 'Admin', 'action' => 'login']) ?></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>


