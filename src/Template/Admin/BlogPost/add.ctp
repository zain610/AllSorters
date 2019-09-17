<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Blog Post'), ['action' => 'index']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<div class="blogPost form large-9 medium-8 columns content">
    <?= $this->Form->create($blogPost) ?>
    <fieldset>
        <legend><?= __('Add Blog Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('Date');
            echo $this->Form->control('Description');
            echo $this->Form->control('Body');
            //echo $this->Form->control('image._ids', ['options' => $image]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
