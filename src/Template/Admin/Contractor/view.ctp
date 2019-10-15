<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 */
?>
<?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>


<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="leftcolumn">
            <h3>Contractor name: <?= h($contractor->Contractor_name) ?></h3>
            <p>Contractor id: <?= $this->Number->format($contractor->Contractor_id) ?></p>
            <p>Contractor rate: <?= $this->Number->format($contractor->Rate) ?> </p>
        </div></div></div>

    <div class="related">
        <h4><?= __('Related Job(s)') ?></h4>
        <?php if (!empty($contractor->job)): ?>
        <table cellpadding="0" cellspacing="0" class="articles-table table">
            <tr>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Commence Date') ?></th>
                <th scope="col"><?= __('Duration') ?></th>
                <th scope="col"><?= __('Job Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contractor->job as $job): ?>
            <tr>
                <td><?= h($job->Job_id) ?></td>
                <td><?= h($job->Price) ?></td>
                <td><?= h($job->Commence_Date) ?></td>
                <td><?= h($job->Duration) ?></td>
                <td><?= h($job->Job_Status) ?></td>
                <td class="actions">
                    <?= $this->element('Admin/Buttons/view', ['url' =>  ['controller' => 'Job', 'action' => 'view', $job->Job_id]]) ?>
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['controller' => 'Job', 'action' => 'edit', $job->Job_id]]) ?>
                    <?= $this->element('Admin/Buttons/Delete', ['url' => ['controller' => 'Job', 'action' => 'delete', $job->Job_id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->Job_id)]]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
