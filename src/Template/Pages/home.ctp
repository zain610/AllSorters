<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Welcome to UGIE!
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="home">
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <?=$this->Html->image('pete.png', ['alt' => 'Image of Pete'])?>
                </div>
                <div class="col-lg-10">
                    <h1>My name is <?=h($personName)?></h1>
                    <p>My favourite colour is <span style="color: <?=h($favouriteColourValue)?>"><?=h($favouriteColour)?></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <p>
            My goal for this unit is <?=h($goalForUnit)?>
        </p>
    </div>
</body>
</html>
