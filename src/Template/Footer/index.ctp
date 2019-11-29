

<div class="footer index large-9 medium-8 columns content">

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($footer as $footer): ?>
            <tr>
                <td><?= h($footer->Phone) ?></td>
                <td><?= h($footer->Email) ?></td>
                <td><?= h($footer->Address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $footer->Footer_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $footer->Footer_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $footer->Footer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $footer->Footer_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
