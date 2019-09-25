<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job[]|\Cake\Collection\CollectionInterface $job
 */
?>

<div class="table table-hover table-striped">
    <h4><?= __('Jobs') ?></h4>
    <table class="table table-hover table-striped" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Job_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Commence_Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Job_Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($job as $job): ?>
            <tr>
                <td><?= $this->Number->format($job->Job_id) ?></td>
                <td><?= $this->Number->format($job->Price) ?></td>
                <td><?= h($job->Commence_Date) ?></td>
                <td><?= h($job->Duration) ?></td>
                <td><?= h($job->Job_Status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $job->Job_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->Job_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->Job_id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->Job_id)]) ?>
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
