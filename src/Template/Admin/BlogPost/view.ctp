<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogpost
 */
?>
<?php $this->assign('heading-class', 'post-heading') ?>
<?php $this->assign('heading', $blogpost->title) ?>
<?php $this->assign('meta', "Posted on {$blogpost->created->toFormattedDateString()}") ?>

<?php
/*
 * Intentionally don't escape this output via h($article->body), because it contains HTML which we want to display
 * to the user. Instead, we have made sure the code is safe from XSS attacks because we use HTMLPurifier to strip
 * any dangerous HTML tags before we save it to the database.
 */
?>
<article>
    <?= $blogpost->body ?>
</article>



/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
//?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('Edit Blog Post'), ['action' => 'edit', $blogPost->id]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Form->postLink(__('Delete Blog Post'), ['action' => 'delete', $blogPost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('List Blog Post'), ['action' => 'index']) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('New Blog Post'), ['action' => 'add']) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?><!-- </li>-->
<!--        <li>--><?//= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?><!-- </li>-->
<!--    </ul>-->
<!--</nav>-->
<!--<div class="blogPost view large-9 medium-8 columns content">-->
<!--    <h3>--><?//= h($blogPost->title) ?><!--</h3>-->
<!--    <table class="vertical-table">-->
<!--        <tr>-->
<!--            <th scope="row">--><?//= __('Title') ?><!--</th>-->
<!--            <td>--><?//= h($blogPost->title) ?><!--</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th scope="row">--><?//= __('Description') ?><!--</th>-->
<!--            <td>--><?//= h($blogPost->Description) ?><!--</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th scope="row">--><?//= __('Body') ?><!--</th>-->
<!--            <td>--><?//= h($blogPost->Body) ?><!--</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th scope="row">--><?//= __('Id') ?><!--</th>-->
<!--            <td>--><?//= $this->Number->format($blogPost->id) ?><!--</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th scope="row">--><?//= __('Date') ?><!--</th>-->
<!--            <td>--><?//= h($blogPost->Date) ?><!--</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th scope="row">--><?//= __('Created') ?><!--</th>-->
<!--            <td>--><?//= h($blogPost->created) ?><!--</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th scope="row">--><?//= __('Modified') ?><!--</th>-->
<!--            <td>--><?//= h($blogPost->modified) ?><!--</td>-->
<!--        </tr>-->
<!--    </table>-->
<!--    <div class="related">-->
<!--        <h4>--><?//= __('Related Image') ?><!--</h4>-->
<!--        --><?php //if (!empty($blogPost->image)): ?>
<!--        <table cellpadding="0" cellspacing="0">-->
<!--            <tr>-->
<!--                <th scope="col">--><?//= __('Image Id') ?><!--</th>-->
<!--                <th scope="col">--><?//= __('Image Content') ?><!--</th>-->
<!--                <th scope="col" class="actions">--><?//= __('Actions') ?><!--</th>-->
<!--            </tr>-->
<!--            --><?php //foreach ($blogPost->image as $image): ?>
<!--            <tr>-->
<!--                <td>--><?//= h($image->Image_id) ?><!--</td>-->
<!--                <td>--><?//= h($image->Image_Content) ?><!--</td>-->
<!--                <td class="actions">-->
<!--                    --><?//= $this->Html->link(__('View'), ['controller' => 'Image', 'action' => 'view', $image->Image_id]) ?>
<!--                    --><?//= $this->Html->link(__('Edit'), ['controller' => 'Image', 'action' => 'edit', $image->Image_id]) ?>
<!--                    --><?//= $this->Form->postLink(__('Delete'), ['controller' => 'Image', 'action' => 'delete', $image->Image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->Image_id)]) ?>
<!--                </td>-->
<!--            </tr>-->
<!--            --><?php //endforeach; ?>
<!--        </table>-->
<!--        --><?php //endif; ?>
<!--    </div>-->
<!--</div>-->
