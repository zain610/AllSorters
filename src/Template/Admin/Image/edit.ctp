<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<div class="image form large-9 medium-8 columns content">
    <?= $this->Form->create($image) ?>
    <fieldset>
        <legend><?= __('Edit Image') ?></legend>
        <?php
            echo $this->Form->control('gallery_title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['formnovalidate' => true]) ?>
    <?= $this->Form->end() ?>
</div>
