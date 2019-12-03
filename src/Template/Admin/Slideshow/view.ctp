<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slideshow $slideshow
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Slideshow'), ['action' => 'edit', $slideshow->Slideshow_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Slideshow'), ['action' => 'delete', $slideshow->Slideshow_id], ['confirm' => __('Are you sure you want to delete # {0}?', $slideshow->Slideshow_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Slideshow'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Slideshow'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="slideshow view large-9 medium-8 columns content">
    <h3><?= h($slideshow->Slideshow_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $slideshow->has('image') ? $this->Html->link($slideshow->image->Image_id, ['controller' => 'Image', 'action' => 'view', $slideshow->image->Image_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slideshow Id') ?></th>
            <td><?= $this->Number->format($slideshow->Slideshow_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Captions') ?></h4>
        <?= $this->Text->autoParagraph(h($slideshow->Captions)); ?>
    </div>
</div>
