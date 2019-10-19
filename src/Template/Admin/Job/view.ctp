<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>

<div class="table table-hover table-striped">
    <div class="row">
        <div class="leftcolumn">
            <h3>Job ID: <?= h($job->Job_id) ?></h3>
            <p>Job Status: <?= h($job->Job_Status) ?></p>
            <p>Cost: <?= $this->Number->format($job->Price) ?> </p>
            <p>Commence date: <?= h($job->Commence_Date) ?> </p>
            <p>Duration: <?= h($job->Duration) ?> </p>

        </div></div></div>

    <div class="related">
        <h4><?= __('Related Contractor') ?></h4>
        <?php if (!empty($job->contractor)): ?>
        <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
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
                    <?= $this->element('Admin/Buttons/view', ['url' => ['controller' => 'Contractor', 'action' => 'view', $contractor->Contractor_id]]) ?>
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['controller' => 'Contractor', 'action' => 'edit', $contractor->Contractor_id]]) ?>
                    <?= $this->element('Admin/Buttons/Delete', ['url' => ['controller' => 'Contractor', 'action' => 'delete', $contractor->Contractor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->Contractor_id)]]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Services(s)') ?></h4>
        <?php if (!empty($job->service)): ?>
        <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
            <tr>
                <th scope="col"><?= __('Services Id') ?></th>
                <th scope="col"><?= __('Services Title') ?></th>
                <th scope="col"><?= __('Services Description') ?></th>
                <th scope="col"><?= __('Services Detail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($job->service as $service): ?>
            <tr>
                <td><?= h($service->Service_id) ?></td>
                <td><?= h($service->Service_Title) ?></td>
                <td><?= h($service->Service_Description) ?></td>
                <td><?= h(strip_tags($service->Service_Detail)) ?></td>
                <td class="actions">
                    <?= $this->element('Admin/Buttons/view', ['url' =>  ['controller' => 'Services', 'action' => 'view', $service->Service_id]]) ?>
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['controller' => 'Services', 'action' => 'edit', $service->Service_id]]) ?>
                    <?= $this->element('Admin/Buttons/Delete', ['url' =>  ['controller' => 'Services', 'action' => 'delete', $service->Service_id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->Service_id)]]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
