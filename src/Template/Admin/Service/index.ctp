<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service[]|\Cake\Collection\CollectionInterface $service
 */
?>

<div class="table table-hover table-striped">
    <h4><?= __('Services') ?></h4>
    <table class="articles-table table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Service_Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Service_Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($service as $service): ?>
                <tr class="article-row">
                    <td style="width: 40%">
                        <?= $this->Html->link($service->Service_Title, ['action' => 'edit', $service->Service_id]) ?>
                    </td>
                    <td>
                        <?= $this->Html->link($service->Service_Description, ['action' => 'edit', $service->Service_id]) ?>
                    </td>
                    <td class="action-col">
                        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $service->Service_id]]) ?>
                        <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $service->Service_id]]) ?>
                        <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'delete', $service->Service_id]]) ?>
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
