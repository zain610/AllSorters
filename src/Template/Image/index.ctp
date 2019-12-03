<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $image
 */
?>
<?= $this->layout('Admin'); ?>
<div class="content table-responsive table-full-width">
<div class="image index large-9 medium-8 columns content">
    <h3><?= __('Image') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Image_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Image_Content') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('path') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($image as $image): ?>
            <tr>
                <td><?= $this->Number->format($image->Image_id) ?></td>
                <td><?= h($image->Image_Content) ?></td>
                <td><?= h($image->name) ?></td>
                <td><?= h($image->path) ?></td>
                <td><?= h($image->created_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $image->Image_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $image->Image_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $image->Image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->Image_id)]) ?>

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
</div>
