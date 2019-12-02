<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favourite $favourite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Favourite'), ['action' => 'edit', $favourite->favourites_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Favourite'), ['action' => 'delete', $favourite->favourites_id], ['confirm' => __('Are you sure you want to delete # {0}?', $favourite->favourites_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Favourites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Favourite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="favourites view large-9 medium-8 columns content">
    <h3><?= h($favourite->favourites_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($favourite->Title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Content') ?></th>
            <td><?= h($favourite->Content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Favourites Id') ?></th>
            <td><?= $this->Number->format($favourite->favourites_id) ?></td>
        </tr>
    </table>
</div>
