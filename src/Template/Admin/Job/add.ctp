<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */

$this->Html->script('/TinyMCE/js/tiny_mce/tiny_mce.js', array(
    'inline' => false
));
?>

<div class="col-md-8">
    <div class="content table-responsive table-full-width">
        <div class="card">
                <?= $this->Form->create($job) ?>
            <fieldset>
                <legend><?= __('Add Job') ?></legend>
                <?php
                    echo $this->Form->control('Price');
                    echo $this->Form->control('Commence_Date', ['empty' => true]);
                    echo $this->Form->control('Duration', ['empty' => true]);
                    echo $this->Form->control('Job_Status');
                    echo $this->Form->control('contractor._ids', ['options' => $contractor]);
                    echo $this->Form->control('service._ids', ['options' => $service]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->button('Preview', ['type' => 'button', 'onclick' => 'handlePreviewClick(this)'] ) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


