<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>

</nav>
<div class="table table-hover table-striped">
    <?= $this->Html->link('Add a Speaking Engagement', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary']) ?>

    <h3><?= __('Speaking Engagements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Time') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Venue') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($publishedEvents as $event): ?>
            <?php if ($event->Published) { ?>
                <tr>
                    <td><?= h($event->Date->format('d-m-Y')) ?></td>
                    <td><?= $event->Time->i18nFormat([\IntlDateFormatter::NONE, \IntlDateFormatter::SHORT]) ?></td>
                    <td><?= strip_tags($event->Description) ?></td>
                    <td><?= strip_tags($event->Venue) ?></td>
                    <td class="actions">
                        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $event->id]]) ?>
                        <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $event->id]]) ?>
                        <?= $this->element('Admin/Buttons/Archive', ['url' => ['action' => 'archive', $event->id], ['confirm' => __('Are you sure you want to archive # {0}?', $event->id)]]) ?>
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

