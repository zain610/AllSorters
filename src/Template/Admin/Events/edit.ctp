<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>


<div class="card">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
        echo "<br>";
        echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('description', ['type' => 'textarea']);
            echo $this->Form->control('venue', ['type' => 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
