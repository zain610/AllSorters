<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job[]|\Cake\Collection\CollectionInterface $job
 */
?>

<div class="table table-hover table-striped">
    <h4><?= __('Jobs') ?></h4>
    <table class="table table-hover table-striped" width="120%">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('Job_id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Price') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Duration') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Commence_Date') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Job_Detail') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($job as $job): ?>
        <?php if (!$job->job_status){?>
            <tr>
                <td><?= $this->Number->format($job->job_id) ?></td>
                <td><?= $this->Number->format($job->price) ?></td>
                <td><?= h($job->duration) ?></td>
                <td><?= h($job->Commence_Date) ?></td>
                <td><?= strip_tags($job->job_detail)?></td>
                <td class="action" >
                    <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $job->job_id]]) ?>
                    <br>
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $job->job_id]]) ?>
                    <br>
                    <?= $this->element('Admin/Buttons/archive', ['url' => ['action' => 'archive', $job->job_id], ['confirm' => __('Are you sure you want to archive # {0}?', $job->job_id)]]) ?>
                </td>
            </tr>
        <?php }; ?>
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
