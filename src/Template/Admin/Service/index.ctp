<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service[]|\Cake\Collection\CollectionInterface $service
 */
?>

<div class="table table-hover table-striped">
    <h4><?= __('Services') ?></h4>
    <table class="table table-hover table-striped" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Service_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Service_Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Service_Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($service as $service): ?>
            <tr>
                <td><?= $this->Number->format($service->Service_id) ?></td>
                <td><?= h($service->Service_Title) ?></td>
                <td><?= h($service->Service_Description), 20, ['ellipsis' => '...',
                        'exact' => false] ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $service->Service_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->Service_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->Service_id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->Service_id)]) ?>
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
