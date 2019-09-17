<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $image->Image_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $image->Image_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Image'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blog Post'), ['controller' => 'BlogPost', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Blog Post'), ['controller' => 'BlogPost', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gallery Page'), ['controller' => 'GalleryPage', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gallery Page'), ['controller' => 'GalleryPage', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Service'), ['controller' => 'Service', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Service', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="image form large-9 medium-8 columns content">
    <?= $this->Form->create($image) ?>
    <fieldset>
        <legend><?= __('Edit Image') ?></legend>
        <?php
            echo $this->Form->control('Image_Content');
            echo $this->Form->control('name');
            echo $this->Form->control('path');
            echo $this->Form->control('created_at', ['empty' => true]);
            echo $this->Form->control('blog_post._ids', ['options' => $blogPost]);
            echo $this->Form->control('gallery_page._ids', ['options' => $galleryPage]);
            echo $this->Form->control('service._ids', ['options' => $service]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
