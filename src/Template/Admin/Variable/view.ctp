<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Variable $variable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Variable'), ['action' => 'edit', $variable->variable_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Variable'), ['action' => 'delete', $variable->variable_id], ['confirm' => __('Are you sure you want to delete # {0}?', $variable->variable_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Variable'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Variable'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="variable view large-9 medium-8 columns content">
    <h3><?= h($variable->variable_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Variable Key') ?></th>
            <td><?= h($variable->variable_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Variable Value') ?></th>
            <td><?= h($variable->variable_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Variable Id') ?></th>
            <td><?= $this->Number->format($variable->variable_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Variable Cid') ?></th>
            <td><?= $this->Number->format($variable->variable_cid) ?></td>
        </tr>
    </table>
</div>
