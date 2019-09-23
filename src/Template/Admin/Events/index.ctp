<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>

</nav>
<div class="events index large-9 medium-8 columns content">
    <?= $this->Html->link('Add an event', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary']) ?>

    <h3><?= __('Speaking Engagements') ?></h3>
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
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= h($event->date) ?></td>
                <td><?= h($event->description) ?></td>
                <td><?= h($event->venue) ?></td>
                <td class="actions">
                    <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $event->id]]) ?>
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $event->id]]) ?>
                    <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]]) ?>
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
