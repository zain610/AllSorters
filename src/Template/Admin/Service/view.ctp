<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>

<div class="service view large-9 medium-8 columns content">
    <h3><?= h($service->Service_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Service Title') ?></th>
            <td><?= h($service->Service_Title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Description') ?></th>
            <td><?= h($service->Service_Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Id') ?></th>
            <td><?= $this->Number->format($service->Service_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Service Detail') ?></h4>
        <?= $this->Text->autoParagraph(h($service->Service_Detail)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Image') ?></h4>
        <?php if (!empty($service->image)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Image Id') ?></th>
                <th scope="col"><?= __('Image Content') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($service->image as $image): ?>
            <tr>
                <td><?= h($image->Image_id) ?></td>
                <td><?= h($image->Image_Content) ?></td>
                <td><?= h($image->name) ?></td>
                <td><?= h($image->path) ?></td>
                <td><?= h($image->created_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Image', 'action' => 'view', $image->Image_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Image', 'action' => 'edit', $image->Image_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Image', 'action' => 'delete', $image->Image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->Image_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Job') ?></h4>
        <?php if (!empty($service->job)): ?>
        <table cellpadding="0" cellspacing="0">
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
