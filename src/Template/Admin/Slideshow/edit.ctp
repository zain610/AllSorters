<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slideshow $slideshow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $slideshow->Slideshow_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $slideshow->Slideshow_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Slideshow'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="slideshow form large-9 medium-8 columns content">
    <?= $this->Form->create($slideshow) ?>
    <fieldset>
        <legend><?= __('Edit Slideshow') ?></legend>
        <?php
            echo $this->Form->control('Captions');
            echo $this->Form->control('Image_id', ['options' => $image]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
