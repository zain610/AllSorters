<?php
use Cake\ORM\TableRegistry;
?>


</head>
<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">

        <div class="row">
            <div class="col-sm-2 col-xs-12">
                <div id="gtco-logo"><?= $this->Html->link('Allsorters', ['controller' => 'Allsorters', 'action' => 'home']) ?></div>

            </div>
            <div class="col-xs-10 text-right menu-1">
                <ul>
                    <!--                        class="active"-->
                    <li class="active"><?= $this->Html->link('Home', ['controller' => 'Allsorters', 'action' => 'home']) ?></li>
                    <li><?= $this->Html->link('About', ['controller' => 'About', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link('About', ['controller' => 'About', 'action' => 'index']) ?></li>
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
                    <li><?= $this->Html->link('Contact Us',['controller' => 'Admin', 'action' => 'login'])?></li>
                </ul>
            </div>
        </div>

    </div>
</nav>


