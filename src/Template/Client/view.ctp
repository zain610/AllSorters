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
            <th scope="row"><?= __('Fname') ?></th>
            <td><?= h($client->fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sname') ?></th>
            <td><?= h($client->sname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($client->Address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($client->Phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DOB') ?></th>
            <td><?= h($client->DOB) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($client->Created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($client->Modified) ?></td>
        </tr>
    </table>
</div>
