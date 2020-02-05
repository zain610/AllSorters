<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost[]|\Cake\Collection\CollectionInterface $blogPost
 */

$currentController = $this->request->getParam('controller');
?>
<div class="table table-hover table-striped">
    <div id="searchBarNavBar">
        <?= $this->element('Admin/Buttons/search'); ?>
        <?= $this->Html->link('Add Blog Post', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary']) ?>
    </div>
    <h3><?= __('Blog Post') ?></h3>

    <table class="articles-table table">
        <?= $this->Flash->render() ?>
        <thead>
            <tr>
                <th class="table-column-one"><?= $this->Paginator->sort('title') ?></th>
                <th class="table-column-one"><?= $this->Paginator->sort('created') ?></th>
                <th class="table-column-actions">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publishedBlogPosts as $blogPost): ?>
            <?php if ($blogPost->Published) { ?>
            <tr class="article-row">
                    <td style="width: 40%">
                        <?= $this->Html->link($blogPost->title, ['action' => 'edit', $blogPost->blog_post_id]) ?>
                    </td>
                    <td>
                        <?= $blogPost->created->timeAgoInWords() ?>
                    </td>
                    <td class="action-col" style="">
                        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $blogPost->blog_post_id]]) ?>
                        <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $blogPost->blog_post_id]]) ?>
                        <?= $this->element('Admin/Buttons/Archive', ['url' => ['action' => 'archive', $blogPost->blog_post_id], ['confirm' => __('Are you sure you want to archive # {0}?', $blogPost->id)]]) ?>
                        <?= $this->element('Admin/Buttons/publish', ['url' => ['action' => 'publishToFacebook', $blogPost->blog_post_id]]); ?>
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
