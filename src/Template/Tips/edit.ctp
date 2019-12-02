<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tip $tip
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tip->tips_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tip->tips_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tips'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tips form large-9 medium-8 columns content">
    <?= $this->Form->create($tip) ?>
    <fieldset>
        <legend><?= __('Edit Tip') ?></legend>
        <?php
            echo $this->Form->control('Title');
            echo $this->Form->control('Content');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
