<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Footer $footer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Footer'), ['action' => 'edit', $footer->Footer_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Footer'), ['action' => 'delete', $footer->Footer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $footer->Footer_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Footer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Footer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="footer view large-9 medium-8 columns content">
    <h3><?= h($footer->Footer_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($footer->Phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($footer->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($footer->Address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Footer Id') ?></th>
            <td><?= $this->Number->format($footer->Footer_id) ?></td>
        </tr>
    </table>
</div>
