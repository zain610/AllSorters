<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favourite $favourite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Favourites'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="favourites form large-9 medium-8 columns content">
    <?= $this->Form->create($favourite) ?>
    <fieldset>
        <legend><?= __('Add Favourite') ?></legend>
        <?php
            echo $this->Form->control('Title');
            echo $this->Form->control('Content');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
