<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $request
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Request'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client'), ['controller' => 'Client', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Client', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="request index large-9 medium-8 columns content">
    <h3><?= __('Request') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Request_No') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Request_Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cust_Fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cust_Sname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Query_info') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($request as $request): ?>
            <tr>
                <td><?= $this->Number->format($request->Request_No) ?></td>
                <td><?= h($request->Request_Email) ?></td>
                <td><?= h($request->Cust_Fname) ?></td>
                <td><?= h($request->Cust_Sname) ?></td>
                <td><?= h($request->Query_info) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $request->Request_No]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $request->Request_No]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $request->Request_No], ['confirm' => __('Are you sure you want to delete # {0}?', $request->Request_No)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
