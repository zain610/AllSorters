<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost[]|\Cake\Collection\CollectionInterface $blogPost
 */
?>

/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Article[] $articles
*/
?>

<div class="title-block">
    <div class="title">
        Articles
        <?= $this->Html->link('Add Article', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary']) ?>
    </div>
</div>

<div class="card card-block">

    <table class="articles-table table">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($blogpost as $post): ?>
            <tr class="article-row <?= $post->published ? 'published' : 'unpublished' ?>">
                <td style="width: 40%">
                    <?= $this->Html->link($post->title, ['action' => 'edit', $post->slug]) ?>
                </td>
                <td>
                    <?= $post->created->timeAgoInWords() ?>
                </td>
                <td class="action-col">
                    <?php if ($post->published) { ?>
                        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $post->slug]]) ?>
                        <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $post->slug]]) ?>
                        <?= $this->element('Admin/Buttons/hide', ['url' => ['action' => 'hide', $post->id]]) ?>
                        <?= $this->element('Admin/Buttons/archive', ['url' => ['action' => 'archive', $post->id]]) ?>
                    <?php } else {?>
                        <?= $this->element('Admin/Buttons/preview', ['url' => ['action' => 'view', $post->slug]]) ?>
                        <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $post->slug]]) ?>
                        <?= $this->element('Admin/Buttons/publish', ['url' => ['action' => 'publish', $post->id]]) ?>
                        <?= $this->element('Admin/Buttons/archive', ['url' => ['action' => 'archive', $post->id]]) ?>
                    <?php } ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>



<!--default-->
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('New Blog Post'), ['action' => 'add']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<!--<div class="blogPost index large-9 medium-8 columns content">-->
<!--    <h3>--><?//= __('Blog Post') ?><!--</h3>-->
<!--    <table cellpadding="0" cellspacing="0">-->
<!--        <thead>-->
<!--            <tr>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('id') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('title') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('Date') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('Description') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('Body') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('created') ?><!--</th>-->
<!--                <th scope="col">--><?//= $this->Paginator->sort('modified') ?><!--</th>-->
<!--                <th scope="col" class="actions">--><?//= __('Actions') ?><!--</th>-->
<!--            </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--            --><?php //foreach ($blogPost as $blogPost): ?>
<!--            <tr>-->
<!--                <td>--><?//= $this->Number->format($blogPost->id) ?><!--</td>-->
<!--                <td>--><?//= h($blogPost->title) ?><!--</td>-->
<!--                <td>--><?//= h($blogPost->Date) ?><!--</td>-->
<!--                <td>--><?//= h($blogPost->Description) ?><!--</td>-->
<!--                <td>--><?//= h($blogPost->Body) ?><!--</td>-->
<!--                <td>--><?//= h($blogPost->created) ?><!--</td>-->
<!--                <td>--><?//= h($blogPost->modified) ?><!--</td>-->
<!--                <td class="actions">-->
<!--                    --><?//= $this->Html->link(__('View'), ['action' => 'view', $blogPost->id]) ?>
<!--                    --><?//= $this->Html->link(__('Edit'), ['action' => 'edit', $blogPost->id]) ?>
<!--                    --><?//= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blogPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]) ?>
<!--                </td>-->
<!--            </tr>-->
<!--            --><?php //endforeach; ?>
<!--        </tbody>-->
<!--    </table>-->
<!--    <div class="paginator">-->
<!--        <ul class="pagination">-->
<!--            --><?//= $this->Paginator->first('<< ' . __('first')) ?>
<!--            --><?//= $this->Paginator->prev('< ' . __('previous')) ?>
<!--            --><?//= $this->Paginator->numbers() ?>
<!--            --><?//= $this->Paginator->next(__('next') . ' >') ?>
<!--            --><?//= $this->Paginator->last(__('last') . ' >>') ?>
<!--        </ul>-->
<!--        <p>--><?//= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?><!--</p>-->
<!--    </div>-->
<!--</div>-->
