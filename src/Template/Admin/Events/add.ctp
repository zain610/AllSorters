<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>

<style>
    .cardwidth{
        width: 100%;
    }
</style>

</nav>
<div class="cardwidth">

<div class="card">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
        echo "<br>";
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('description', ['type' => 'textarea']);
            echo $this->Form->control('venue', ['type' => 'textarea']);
        ?>
    </fieldset>
    <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
