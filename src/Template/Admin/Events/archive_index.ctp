<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $event
 * @var \App\Contoller\Admin\EventsController $archivedEvents
 */
?>
<div class="table table-hover table-striped">

    <h3><?= __('Speaking Engagements Archive') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('date') ?></th>
            <th scope="col"><?= $this->Paginator->sort('description') ?></th>
            <th scope="col"><?= $this->Paginator->sort('venue') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($archivedEvents as $event): ?>
            <?php if ($event->Archived) { ?>
                <tr>
                    <td><?= h($event->date) ?></td>
                    <td><?= h($event->description) ?></td>
                    <td><?= h($event->venue) ?></td>
                    <td class="actions">
                        <?= $this->element('Admin/Buttons/View', ['url' => ['action' => 'view', $event->id]]) ?>
                        <?= $this->element('Admin/Buttons/Edit', ['url' => ['action' => 'edit', $event->id]]) ?>
                        <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]]) ?>
                        <?= $this->element('Admin/Buttons/restore', ['url' => ['action' => 'restore', $event->id], ['confirm' => __('Are you sure you want to restore # {0}?', $event->id)]]) ?>

                    </td>
                </tr>
            <?php } ?>
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