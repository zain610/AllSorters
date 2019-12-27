<?php

?>
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE>
<html>
<head>
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->css('bootstrap.css') ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid" style=" background-color: #fff9c4; display:flex; position: center">
    <h1 style="color: #2d363f; ">AllSorters</h1>
    <p>Test <?= $this->fetch('message') ?></p>

</div>
Thank you for choosing us,

Company name
</body>
<?= $this->Html->script('jquery-3.4.1.min.js') ?>

<?= $this->Html->script('bootstrap.js') ?>

</html>

