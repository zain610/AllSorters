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
        echo $this->Form->control('date', ['type'=> 'date', 'empty' => true]);
            echo $this->Form->control('description');
            echo $this->Form->control('venue');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
