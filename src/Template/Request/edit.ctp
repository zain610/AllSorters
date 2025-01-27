<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $request->Request_No],
                ['confirm' => __('Are you sure you want to delete # {0}?', $request->Request_No)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Request'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client'), ['controller' => 'Client', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Client', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="request form large-9 medium-8 columns content">
    <?= $this->Form->create($request) ?>
    <fieldset>
        <legend><?= __('Edit Request') ?></legend>
        <?php
            echo $this->Form->control('Request_Email');
            echo $this->Form->control('Cust_Fname');
            echo $this->Form->control('Cust_Sname');
            echo $this->Form->control('Query_info');
            echo $this->Form->control('Client_id', ['options' => $client]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
