<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost[]|\Cake\Collection\CollectionInterface $blogPost
 */
?>
<div class="table table-hover table-striped">
    <h3><?= __('Blog Post') ?></h3>
    <table class="articles-table table">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogPost as $blogPost): ?>
                <tr class="article-row">
                    <td style="width: 40%">
                        <?= $this->Html->link($blogPost->title, ['action' => 'edit', $blogPost->blog_post_id]) ?>
                    </td>
                    <td>
                        <?= $blogPost->created->timeAgoInWords() ?>
                    </td>
                    <td class="action-col">
                        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $blogPost->blog_post_id]]) ?>
                        <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $blogPost->blog_post_id]]) ?>
                        <?= $this->element('Admin/Buttons/Archive', ['url' => ['action' => 'archive', $blogPost->blog_post_id], ['confirm' => __('Are you sure you want to archive # {0}?', $blogPost->id)]]) ?>
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
