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
        <legend><?= __('Add a Speaking Engagement') ?></legend>
        <?php
        echo "<br>";
        echo $this->Form->control('Date',['type'=> 'date']);
        echo $this->Form->control('Time', ['type' => 'time']);
        echo $this->Form->control('Description', ['type'=> 'textarea']);
        echo $this->Form->control('Venue',['type'=> 'textarea']);
        ?>
    </fieldset>
    <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
