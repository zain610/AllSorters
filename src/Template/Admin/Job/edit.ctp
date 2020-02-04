<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<style>
    .card{
        width: 100%;
    }
</style>
<div class="job form large-9 medium-8 columns content">
    <?= $this->Form->create($job) ?>
    <fieldset>
        <legend><?= __('Edit Job') ?></legend>
        <?php
            echo $this->Form->control('price');
            echo $this->Form->control('duration', ['empty' => true]);
            echo $this->Form->control('Commence_Date', ['empty' => true]);
            echo $this->Form->control('job_detail',['type'=>'textarea']);
            echo $this->Form->control('service_id', [
            'options' => $service,
            'style' => 'height:50px',
            'class' => 'custom-select custom-select-lg mb-3'
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit',['formnovalidate' => true])) ?>
    <?= $this->Form->end() ?>
</div>
