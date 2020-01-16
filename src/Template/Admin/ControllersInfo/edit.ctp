<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ControllersInfo $controllersInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $controllersInfo->controller_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $controllersInfo->controller_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Controllers Info'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="controllersInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($controllersInfo) ?>
    <fieldset>
        <legend><?= __('Edit Controllers Info') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
