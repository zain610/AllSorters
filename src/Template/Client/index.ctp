<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $client
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div>
    <h3><?= __('Client') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DOB') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($client as $client): ?>
            <tr>
                <td><?= $this->Number->format($client->id) ?></td>
                <td><?= h($client->fname) ?></td>
                <td><?= h($client->sname) ?></td>
                <td><?= h($client->DOB) ?></td>
                <td><?= h($client->Address) ?></td>
                <td><?= h($client->Phone) ?></td>
                <td><?= h($client->Email) ?></td>
                <td><?= h($client->Created) ?></td>
                <td><?= h($client->Modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $client->Client_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->Client_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->Client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->Client_id)]) ?>
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
