<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>

<div class="content table-responsive table-full-width">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <legend><?= __('Add Service') ?></legend>
        <?php
            echo $this->Form->control('Serv_Title');
            echo $this->Form->control('Serv_Description');
            echo $this->Form->control('Serv_Detail', ['type' => 'textarea']);
            echo $this->Form->control('job._ids', ['options' => $job]);
            echo $this->Form->control('image._ids', ['options' => $image]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['formnovalidate' => true]) ?>
    <?= $this->Form->end() ?>
</div>
