<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 */
?>

<div class="contractor view large-9 medium-8 columns content">
    <h3><?= h($contractor->Contractor_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contractor Name') ?></th>
            <td><?= h($contractor->Contractor_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contractor Id') ?></th>
            <td><?= $this->Number->format($contractor->Contractor_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rate') ?></th>
            <td><?= $this->Number->format($contractor->Rate) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Job') ?></h4>
        <?php if (!empty($contractor->job)): ?>
        <table cellpadding="0" cellspacing="0">
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
                    <?= $this->Html->link(__('View'), ['controller' => 'Job', 'action' => 'view', $job->Job_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Job', 'action' => 'edit', $job->Job_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Job', 'action' => 'delete', $job->Job_id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->Job_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
