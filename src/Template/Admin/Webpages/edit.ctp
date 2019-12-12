<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Webpage $webpage
 */
?>
<style>
    .card{
        width: 100%;
    }
</style>
<div class="card">
    <?= $this->Form->create($webpage) ?>
    <fieldset>
        <legend><?= __('Edit Webpage') ?></legend>
        <?php
        $name = $webpage->Webpage;
        echo $this->Form->control('Heading');
        $val= h($webpage['Webpage']);
        if ($val === 'Speaking Engagements') {
            echo $this->Form->control('Content', ['type' => 'textarea']);
        }
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit') ,['formnovalidate' => true]) ?>
    <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>

    <?= $this->Form->end() ?>
</div>
