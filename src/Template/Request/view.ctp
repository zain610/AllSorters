<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Request'), ['action' => 'edit', $request->Request_No]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Request'), ['action' => 'delete', $request->Request_No], ['confirm' => __('Are you sure you want to delete # {0}?', $request->Request_No)]) ?> </li>
        <li><?= $this->Html->link(__('List Request'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client'), ['controller' => 'Client', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Client', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="request view large-9 medium-8 columns content">
    <h3><?= h($request->Request_No) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Request Email') ?></th>
            <td><?= h($request->Request_Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cust Fname') ?></th>
            <td><?= h($request->Cust_Fname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cust Sname') ?></th>
            <td><?= h($request->Cust_Sname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Query Info') ?></th>
            <td><?= h($request->Query_info) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $request->has('client') ? $this->Html->link($request->client->id, ['controller' => 'Client', 'action' => 'view', $request->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Request No') ?></th>
            <td><?= $this->Number->format($request->Request_No) ?></td>
        </tr>
    </table>
</div>
