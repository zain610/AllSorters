<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor[]|\Cake\Collection\CollectionInterface $contractor
 */
?>



<div class="table table-hover table-striped">
    <?= $this->Html->link('Add a new Contractor', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary']) ?>

    <h4><?= __('Contractors') ?></h4>
    <table class="table table-hover table-striped" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Contractor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Contractor_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Rate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contractor as $contractor): ?>
            <tr>
                <td><?= $this->Number->format($contractor->Contractor_id) ?></td>
                <td><?= h($contractor->Contractor_name) ?></td>
                <td><?= $this->Number->format($contractor->Rate) ?></td>
                <td class="actions">
                    <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $contractor->Contractor_id]]) ?>
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $contractor->Contractor_id]]) ?>
                    <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'delete', $contractor->Contractor_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractor->Contractor_id)]]) ?>
                </td>
            </tr>
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
