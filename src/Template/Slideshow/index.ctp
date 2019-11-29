<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slideshow[]|\Cake\Collection\CollectionInterface $slideshow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Slideshow'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="slideshow index large-9 medium-8 columns content">
    <h3><?= __('Slideshow') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Slideshow_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Image_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($slideshow as $slideshow): ?>
            <tr>
                <td><?= $this->Number->format($slideshow->Slideshow_id) ?></td>
                <td><?= $slideshow->has('image') ? $this->Html->link($slideshow->image->Image_id, ['controller' => 'Image', 'action' => 'view', $slideshow->image->Image_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $slideshow->Slideshow_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $slideshow->Slideshow_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $slideshow->Slideshow_id], ['confirm' => __('Are you sure you want to delete # {0}?', $slideshow->Slideshow_id)]) ?>
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
