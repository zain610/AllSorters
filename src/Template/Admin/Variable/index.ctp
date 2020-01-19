<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Variable[]|\Cake\Collection\CollectionInterface $variable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Variable'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="variable index large-9 medium-8 columns content">
    <h3><?= __('Variable') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('variable_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('variable_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('variable_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('variable_cid') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variable as $variable): ?>
            <tr>
                <td><?= $this->Number->format($variable->variable_id) ?></td>
                <td><?= h($variable->variable_key) ?></td>
                <td><?= h($variable->variable_value) ?></td>
                <td><?= $this->Number->format($variable->variable_cid) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $variable->variable_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $variable->variable_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $variable->variable_id], ['confirm' => __('Are you sure you want to delete # {0}?', $variable->variable_id)]) ?>
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
