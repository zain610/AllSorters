<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleryPage $galleryPage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $galleryPage->BA_Image_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $galleryPage->BA_Image_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gallery Page'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galleryPage form large-9 medium-8 columns content">
    <?= $this->Form->create($galleryPage) ?>
    <fieldset>
        <legend><?= __('Edit Gallery Page') ?></legend>
        <?php
            echo $this->Form->control('Date', ['empty' => true]);
            echo $this->Form->control('Image_Attribute');
            echo $this->Form->control('Suburb');
            echo $this->Form->control('Image_Comment');
            echo $this->Form->control('image._ids', ['options' => $image]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
