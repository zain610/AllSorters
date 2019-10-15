<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $event
 */
?>

<div class="table table-hover table-striped">

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
            <?php foreach ($archivedBlogPosts as $blogPost): ?>
                <?php if ($blogPost->Archived) { ?>
                    <tr>
                        <td><?= h($blogPost->title) ?></td>
                        <td><?= h($blogPost->Date) ?></td>
                        <td><?= h($blogPost->modified) ?></td>
                        <td class="actions">
                            <?= $this->element('Admin/Buttons/View', ['url' => ['action' => 'view', $blogPost->blog_post_id]]) ?>
                            <?= $this->element('Admin/Buttons/Edit', ['url' => ['action' => 'edit', $blogPost->blog_post_id]]) ?>
                            <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'delete', $blogPost->blog_post_id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]]) ?>
                            <?= $this->element('Admin/Buttons/restore', ['url' => ['action' => 'restore', $blogPost->blog_post_id], ['confirm' => __('Are you sure you want to restore # {0}?', $blogPost->id)]]) ?>

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
