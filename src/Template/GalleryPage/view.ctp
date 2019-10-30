<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleryPage $galleryPage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gallery Page'), ['action' => 'edit', $galleryPage->BA_Image_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gallery Page'), ['action' => 'delete', $galleryPage->BA_Image_id], ['confirm' => __('Are you sure you want to delete # {0}?', $galleryPage->BA_Image_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gallery Page'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gallery Page'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galleryPage view large-9 medium-8 columns content">
    <h3><?= h($galleryPage->BA_Image_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image Attribute') ?></th>
            <td><?= h($galleryPage->Image_Attribute) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Comment') ?></th>
            <td><?= h($galleryPage->Image_Comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BA Image Id') ?></th>
            <td><?= $this->Number->format($galleryPage->BA_Image_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suburb') ?></th>
            <td><?= $this->Number->format($galleryPage->Suburb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($galleryPage->Date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Image') ?></h4>
        <?php if (!empty($galleryPage->image)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Image Id') ?></th>
                <th scope="col"><?= __('Image Content') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($galleryPage->image as $image): ?>
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
