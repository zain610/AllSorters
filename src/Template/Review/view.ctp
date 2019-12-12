<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Review'), ['action' => 'edit', $review->Review_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Review'), ['action' => 'delete', $review->Review_id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->Review_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Review'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="review view large-9 medium-8 columns content">
    <h3><?= h($review->Review_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client Name') ?></th>
            <td><?= h($review->Client_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suburb') ?></th>
            <td><?= h($review->Suburb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review Id') ?></th>
            <td><?= $this->Number->format($review->Review_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Year') ?></th>
            <td><?= h($review->Month_Year) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Review Details') ?></h4>
        <?= $this->Text->autoParagraph(h($review->Review_Details)); ?>
    </div>
</div>
