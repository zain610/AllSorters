<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Booking'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="booking form large-9 medium-8 columns content">
    <?= $this->Form->create($booking) ?>
    <fieldset>
        <legend><?= __('Add Booking') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('start', ['empty' => true]);
            echo $this->Form->control('adminID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
