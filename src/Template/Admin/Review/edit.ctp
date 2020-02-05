<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
$this->Html->script('/TinyMCE/js/tiny_mce/tiny_mce.js', array(
    'inline' => false));
?>
<style>
    .card{
        width: 100%;
    }
</style>
<div class="col-md-8">
    <div class="content table-responsive table-full-width">
        <div class="card">
            <?= $this->Flash->render() ?>
    <?= $this->Form->create($review) ?>
    <fieldset>
        <legend><?= __('Edit Review') ?></legend>
        <?php
            echo $this->Form->control('Client_Name');
            echo $this->Form->control('Month_Year', ['type'=> 'date']);
            echo $this->Form->control('Suburb');
            echo $this->Form->control('Review_Details',['type' => 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
        </div></div></div>
