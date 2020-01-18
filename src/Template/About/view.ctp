<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit About'), ['action' => 'edit', $about->about_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete About'), ['action' => 'delete', $about->about_id], ['confirm' => __('Are you sure you want to delete # {0}?', $about->about_id)]) ?> </li>
        <li><?= $this->Html->link(__('List About'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New About'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="about view large-9 medium-8 columns content">
    <h3><?= h($about->about_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($about->Title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('About Id') ?></th>
            <td><?= $this->Number->format($about->about_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($about->Content)); ?>
    </div>
</div>
