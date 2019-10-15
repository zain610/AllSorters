<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */

?>

<div class="content table-responsive table-full-width">

<div class="row">
    <div class="leftcolumn">
        <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $service->Service_id]]) ?>

        <h3>Title: <?= h($service->Service_Title) ?></h3>

            <h5>Description: <?= h($service->Service_Description) ?></h5>
            <p>Details: <?= h($service->Service_Detail) ?></p>

            <h4><?= __('Related Image') ?></h4>
            <?php if (!empty($service->image)): ?>

                    <table cellpadding="0" cellspacing="0">
                        <tbody>
                        <?php foreach ($service->image as $image): ?>
                            <tr>
                                <td class="card" width="50%">
                                    <?php echo $this->Html->image($image->path, ['alt' => 'CakePHP']); ?>
                                </td>
                                <td class="card-body">
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>

                </table>
            <?php endif; ?>


            <h4><?= __('Related Job(s)') ?></h4>

            <?php if (!empty($service->job)): ?>
                <table cellpadding="0" cellspacing="0" class="table table-hover table-striped">
                    <tr>
                        <th scope="col"><?= __('Job Id') ?></th>
                        <th scope="col"><?= __('Price') ?></th>
                        <th scope="col"><?= __('Commence Date') ?></th>
                        <th scope="col"><?= __('Duration') ?></th>
                        <th scope="col"><?= __('Job Status') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($service->job as $job): ?>
                        <tr>
                            <td><?= h($job->Job_id) ?></td>
                            <td><?= h($job->Price) ?></td>
                            <td><?= h($job->Commence_Date) ?></td>
                            <td><?= h($job->Duration) ?></td>
                            <td><?= h($job->Job_Status) ?></td>
                            <td class="actions">
                                <?= $this->element('Admin/Buttons/view', ['url' =>  ['controller' => 'Job', 'action' => 'view', $job->Job_id]]) ?>
                                <?= $this->element('Admin/Buttons/edit', ['url' =>  ['controller' => 'Job', 'action' => 'edit', $job->Job_id]]) ?>
                                <?= $this->element('Admin/Buttons/delete', ['url' =>  ['controller' => 'Job', 'action' => 'delete', $job->Job_id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->Job_id)]]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php endif; ?>


</div>
</div>




