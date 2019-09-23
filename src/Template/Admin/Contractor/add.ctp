<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contractor $contractor
 */
$this->Html->script('/TinyMCE/js/tiny_mce/tiny_mce.js', array(
    'inline' => false));
?>

<div class="col-md-8">
    <div class="content table-responsive table-full-width">
        <div class="card">
    <?= $this->Form->create($contractor) ?>
    <fieldset>
        <legend><?= __('Add Contractor') ?></legend>
        <?php
            echo $this->Form->control('Contractor_name');
            echo $this->Form->control('Rate');
            echo $this->Form->control('job._ids', ['options' => $job]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
        </div></div></div>
