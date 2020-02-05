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
    <?= $this->Form->create($tip) ?>
    <fieldset>
        <legend><?= __('Edit Tips') ?></legend>
        <?php
        echo "<br>";
        echo $this->Form->control('Title');
        echo $this->Form->control('Content',['type'=> 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
