<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Footer[]|\Cake\Collection\CollectionInterface $footer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Footer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="footer index large-9 medium-8 columns content">
    <h3><?= __('Footer') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Footer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($footer as $footer): ?>
            <tr>
                <td><?= $this->Number->format($footer->Footer_id) ?></td>
                <td><?= h($footer->Phone) ?></td>
                <td><?= h($footer->Email) ?></td>
                <td><?= h($footer->Address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $footer->Footer_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $footer->Footer_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $footer->Footer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $footer->Footer_id)]) ?>
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
