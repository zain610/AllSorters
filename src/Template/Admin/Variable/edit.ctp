<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Variable $variable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $variable->variable_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $variable->variable_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Variable'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="variable form large-9 medium-8 columns content">
    <?= $this->Form->create($variable) ?>
    <fieldset>
        <legend><?= __('Edit Variable') ?></legend>
        <?php
            echo $this->Form->control('variable_key');
            echo $this->Form->control('variable_value');
            echo $this->Form->control('variable_cid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
