<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->Client_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->Client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->Client_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="client view large-9 medium-8 columns content">
    <h3><?= h($client->Client_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client Fname') ?></th>
            <td><?= h($client->Client_fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Sname') ?></th>
            <td><?= h($client->Client_sname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Id') ?></th>
            <td><?= $this->Number->format($client->Client_id) ?></td>
        </tr>
    </table>
</div>
