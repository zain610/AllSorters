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
            echo $this->Form->control('Date', ['type'=> 'date']);
            echo $this->Form->control('Time', ['type' => 'time']);
            echo $this->Form->control('description', ['type'=> 'textarea']);
            echo $this->Form->control('venue',['type'=> 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
