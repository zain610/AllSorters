<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ControllersInfo $controllersInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Controllers Info'), ['action' => 'edit', $controllersInfo->controller_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Controllers Info'), ['action' => 'delete', $controllersInfo->controller_id], ['confirm' => __('Are you sure you want to delete # {0}?', $controllersInfo->controller_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Controllers Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Controllers Info'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="controllersInfo view large-9 medium-8 columns content">
    <h3><?= h($controllersInfo->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($controllersInfo->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Controller Id') ?></th>
            <td><?= $this->Number->format($controllersInfo->controller_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Navbar Info') ?></th>
            <td><?= $this->Number->format($controllersInfo->navbar_info) ?></td>
        </tr>
    </table>
</div>
