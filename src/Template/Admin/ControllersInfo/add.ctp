<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ControllersInfo $controllersInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Controllers Info'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="controllersInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($controllersInfo) ?>
    <fieldset>
        <legend><?= __('Add Controllers Info') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('navbar_info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
