<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Webpage $webpage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Webpages'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="webpages form large-9 medium-8 columns content">
    <?= $this->Form->create($webpage) ?>
    <fieldset>
        <legend><?= __('Add Webpage') ?></legend>
        <?php
            echo $this->Form->control('Content');
            echo $this->Form->control('Heading');
            echo $this->Form->control('Controller');
            echo $this->Form->control('Variable_value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
