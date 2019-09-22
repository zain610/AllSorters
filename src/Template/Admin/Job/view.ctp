<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>

<div class="job view large-9 medium-8 columns content">
    <h3><?= h($job->Job_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Job Status') ?></th>
            <td><?= h($job->Job_Status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job Id') ?></th>
            <td><?= $this->Number->format($job->Job_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($job->Price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commence Date') ?></th>
            <td><?= h($job->Commence_Date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= h($job->Duration) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contractor') ?></h4>
        <?php if (!empty($job->contractor)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Contractor Id') ?></th>
                <th scope="col"><?= __('Contractor Name') ?></th>
                <th scope="col"><?= __('Rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->contractor as $contractor): ?>
            <tr>
                <td><?= h($contractor->Contractor_id) ?></td>
                <td><?= h($contractor->Contractor_name) ?></td>
                <td><?= h($contractor->Rate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contractor', 'action' => 'view', $contractor->Contractor_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contractor', 'action' => 'edit', $contractor->Contractor_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contractor', 'action' => 'delete', $contractor->Contractor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->Contractor_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Service') ?></h4>
        <?php if (!empty($job->service)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Service Title') ?></th>
                <th scope="col"><?= __('Service Description') ?></th>
                <th scope="col"><?= __('Service Detail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->service as $service): ?>
            <tr>
                <td><?= h($service->Service_id) ?></td>
                <td><?= h($service->Service_Title) ?></td>
                <td><?= h($service->Service_Description) ?></td>
                <td><?= h($service->Service_Detail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Service', 'action' => 'view', $service->Service_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Service', 'action' => 'edit', $service->Service_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Service', 'action' => 'delete', $service->Service_id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->Service_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
