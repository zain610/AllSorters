<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>

<div class="card">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit a Speaking Engagement') ?></legend>
        <?php
        echo "<br>";
            echo $this->Form->control('date', ['type'=> 'date']);
            echo $this->Form->control('time', ['type' => 'time']);
            echo $this->Form->control('Description', ['type'=> 'textarea']);
            echo $this->Form->control('Venue',['type'=> 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
