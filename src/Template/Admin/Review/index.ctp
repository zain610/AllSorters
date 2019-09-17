<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review[]|\Cake\Collection\CollectionInterface $review
 */
?>
<div class="table table-hover table-striped">
    <h4><?= __('Review') ?></h4>
    <table class="table table-hover table-striped" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Review_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Client_Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Month_Year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Suburb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Review_Details') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($review as $review): ?>
            <tr>
                <td><?= $this->Number->format($review->Review_id) ?></td>
                <td><?= h($review->Client_Name) ?></td>
                <td><?= h($review->Month_Year) ?></td>
                <td><?= $this->Number->format($review->Suburb) ?></td>
                <td><?= $this->Text->truncate(h($review->Review_Details), 22, ['ellipsis' => '...',
                        'exact' => false]) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $review->Review_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $review->Review_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $review->Review_id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->Review_id)]) ?>
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
