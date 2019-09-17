<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost[]|\Cake\Collection\CollectionInterface $blogPost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Blog Post'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blogPost index large-9 medium-8 columns content">
    <h3><?= __('Blog Post') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Body') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogPost as $blogPost): ?>
            <tr>
                <td><?= $this->Number->format($blogPost->id) ?></td>
                <td><?= h($blogPost->title) ?></td>
                <td><?= h($blogPost->Date) ?></td>
                <td><?= h($blogPost->Description) ?></td>
                <td><?= h($blogPost->Body) ?></td>
                <td><?= h($blogPost->created) ?></td>
                <td><?= h($blogPost->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blogPost->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blogPost->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blogPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]) ?>
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
