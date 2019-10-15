<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review[]|\Cake\Collection\CollectionInterface $review
 */
?>
<div class="table table-hover table-striped">
    <div id="searchBarNavBar">
        <?= $this->element('Admin/Buttons/search'); ?>
        <?= $this->Html->link('Add Review Post', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary']) ?>
    </div>
    <h3><?= __('Reviews') ?></h3>
    <table class="articles-table table">
        <thead>
        <tr>
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
                <td><?= h($review->Client_Name) ?></td>
                <td><?= h($review->Month_Year) ?></td>
                <td><?= h(($review->Suburb)) ?></td>
                <td><?= $this->Text->truncate(h($review->Review_Details), 40, ['ellipsis' => '...',
                        'exact' => false]) ?></td>
                <td class="action-col" style="display: contents">
                    <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $review->Review_id]]) ?>
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $review->Review_id]]) ?>
                    <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'delete', $review->Review_id], ['confirm' => __('Are you sure you want to archive # {0}?', $review->Review_id)]]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
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
