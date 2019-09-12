<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admin
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="admin index large-9 medium-8 columns content">
    <h3><?= __('Admin') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Admin_Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Admin_Phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Admin_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($admin as $admin): ?>
            <tr>
                <td><?= h($admin->username) ?></td>
                <td><?= h($admin->password) ?></td>
                <td><?= h($admin->Admin_Email) ?></td>
                <td><?= $this->Number->format($admin->Admin_Phone) ?></td>
                <td><?= $this->Number->format($admin->Admin_id) ?></td>
                <td><?= $this->Number->format($admin->role) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $admin->Admin_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->Admin_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->Admin_id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->Admin_id)]) ?>
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
