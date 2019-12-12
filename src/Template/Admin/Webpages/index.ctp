<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Webpage[]|\Cake\Collection\CollectionInterface $webpages
 */
?>
<div class="table table-hover table-striped">
    <h4><?= __('Webpages') ?></h4>
    <p>Click edit to change headings.</p>
    <p>Edit Speaking Engagements to change the webpage content and the heading.</p>

    <table class="articles-table table">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('Heading') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Webpage') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($webpages as $webpage): ?>
            <tr>
                <td><?= h($webpage->Heading) ?></td>
                <td><?= h($webpage->Webpage) ?></td>
                <td class="actions">
                    <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $webpage->id]]) ?>
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $webpage->id]]) ?>
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
