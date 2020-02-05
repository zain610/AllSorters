<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Footer $footer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Footer'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="footer form large-9 medium-8 columns content">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create($footer) ?>
    <fieldset>
        <legend><?= __('Add Footer') ?></legend>
        <?php
            echo $this->Form->control('Phone');
            echo $this->Form->control('Address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
