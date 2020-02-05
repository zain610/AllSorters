<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favourite[]|\Cake\Collection\CollectionInterface $favourites
 */
?>
</nav>
<div class="table table-hover table-striped">
    <?= $this->Html->link('Add to Favourites', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary']) ?>

    <h3><?= __('Favourites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <?= $this->Flash->render() ?>

        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($favourites as $favourites): ?>
            <tr>
                <td><?= strip_tags($favourites->Title) ?></td>
                <td class="actions">
                    <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $favourites->favourites_id]]) ?>
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $favourites->favourites_id]]) ?>
                    <?= $this->element('Admin/Buttons/Delete', ['url' => ['action' => 'delete', $favourites->favourites_id], ['confirm' => __('Are you sure you want to delete # {0}?', $favourites->favourites_id)]]) ?>
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

