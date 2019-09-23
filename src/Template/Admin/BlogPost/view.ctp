<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
?>

<div class="blogPost view large-9 medium-8 columns content">
    <h3><?= h($blogPost->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($blogPost->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($blogPost->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Body') ?></th>
            <td><?= h($blogPost->Body) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($blogPost->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($blogPost->Date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($blogPost->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($blogPost->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Image') ?></h4>
        <?php if (!empty($blogPost->image)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Image Id') ?></th>
                <th scope="col"><?= __('Image Content') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($blogPost->image as $image): ?>
            <tr>

                <td><?= h($image->Image_id) ?></td>
                <td><?= h($image->Image_Content) ?></td>
                <td><?= h($image->name) ?></td>
                <td><?= h($image->path) ?></td>
                <td><?= h($image->created_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Image', 'action' => 'view', $image->Image_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Image', 'action' => 'edit', $image->Image_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Image', 'action' => 'delete', $image->Image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->Image_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
