<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<div class="content table-responsive table-full-width">

    <?= $this->Form->create($review) ?>
    <fieldset>
        <legend><?= __('Edit Review') ?></legend>
        <?php
            echo $this->Form->control('Client_Name');
            echo $this->Form->control('Month_Year', ['empty' => true]);
            echo $this->Form->control('Suburb');
            echo $this->Form->control('Review_Details');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
