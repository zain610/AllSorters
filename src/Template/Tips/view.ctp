<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tip $tip
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tip'), ['action' => 'edit', $tip->tips_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tip'), ['action' => 'delete', $tip->tips_id], ['confirm' => __('Are you sure you want to delete # {0}?', $tip->tips_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tips'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tip'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tips view large-9 medium-8 columns content">
    <h3><?= h($tip->tips_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($tip->Title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Content') ?></th>
            <td><?= h($tip->Content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tips Id') ?></th>
            <td><?= $this->Number->format($tip->tips_id) ?></td>
        </tr>
    </table>
</div>
