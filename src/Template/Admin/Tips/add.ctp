<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tip $tip
 */
?>
<style>
    .card{
        width: 100%;
    }
</style>
<div class="card">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create($tip) ?>
    <fieldset>
        <legend><?= __('Add to Tips') ?></legend>
        <?php
        echo "<br>";
        echo $this->Form->control('Title');
        echo $this->Form->control('Content',['type'=> 'textarea']);
        ?>
    </fieldset>
    <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
    <?= $this->Form->button(__('Submit'), ['formnovalidate' => true]) ?>
    <?= $this->Form->end() ?>
</div>
