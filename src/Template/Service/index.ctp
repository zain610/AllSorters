<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service[]|\Cake\Collection\CollectionInterface $service
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job'), ['controller' => 'Job', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Job', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="service index large-9 medium-8 columns content">
    <h3><?= __('Service') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Serv_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Serv_Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Serv_Description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Serv_Detail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($service as $service): ?>
            <tr>
                <td><?= $this->Number->format($service->Serv_id) ?></td>
                <td><?= h($service->Serv_Title) ?></td>
                <td><?= h($service->Serv_Description) ?></td>
                <td><?= h($service->Serv_Detail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $service->Serv_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->Serv_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->Serv_id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->Serv_id)]) ?>
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
