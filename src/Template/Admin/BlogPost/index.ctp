<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost[]|\Cake\Collection\CollectionInterface $blogPost
 */
?>
<div class="blogPost index large-9 medium-8 columns content">
    <div class="title">
        <?= $this->Html->link('Add a Blog post', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary']) ?>
    </div>

    <h3><?= __('Blog Post') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogPost as $blogPost): ?>
            <tr>
                <td><?= h($blogPost->title) ?></td>
                <td><?= h($blogPost->Date) ?></td>
                <td><?= h($blogPost->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blogPost->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blogPost->id]) ?>
                    <?= $this->Form->postLink(__('Archive'), ['action' => 'archive', $blogPost->id], ['confirm' => __('Are you sure you want to archive the blog post # {0}?', $blogPost->id)]) ?>
                </td>
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
