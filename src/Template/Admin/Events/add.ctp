<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>

</nav>
<div class="card">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
        echo "<br>";
        echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('description');
            echo $this->Form->control('venue');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
