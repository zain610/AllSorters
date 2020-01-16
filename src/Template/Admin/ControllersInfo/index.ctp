<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ControllersInfo[]|\Cake\Collection\CollectionInterface $controllersInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Controllers Info'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controllersInfo index large-9 medium-8 columns content">
    <h3><?= __('Controllers Info') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('controller_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($controllers as $controllersInfo): ?>
            <tr>
                <td><?= $this->Number->format($controllersInfo->controller_id) ?></td>
                <td><?= h($controllersInfo->name) ?></td>
                <td><?= $this->Number->format($controllersInfo->order) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $controllersInfo->controller_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $controllersInfo->controller_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $controllersInfo->controller_id], ['confirm' => __('Are you sure you want to delete # {0}?', $controllersInfo->controller_id)]) ?>
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
