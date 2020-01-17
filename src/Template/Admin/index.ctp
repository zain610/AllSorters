<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admin
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $request
 */
?>
<div class="table table-hover">
    <h3><?= "Contact Us Queries" ?></h3>
    <table class="articles-table table" cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('Request_Email') ?></th>
            <th scope="col"><?= 'Name' ?></th>
            <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($request as $request): ?>
        <?php $response -> h($request->Response) ?>
        <?php if ($response == null) { ?>
                <?php $name -> h($request->Cust_Fname) + ' ' + h($request->Cust_Sname) ?>
        <tr id="table-row-content" class="article-row">
                <td><?= h($request->Request_Email) ?></td>
                <td><?= h($name) ?></td>
                <td><?= h($request->created) ?></td>
                <td class="action-col" style="display: block">
                    <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $request->Request_No]]) ?>
                </td>
            </tr>
            <td id="table-empty-row"></td>
            <?php } ?>
        <?php endforeach; ?>
        </tbody>
    </table>
