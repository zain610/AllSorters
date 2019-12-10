<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slideshow $slideshow
 */
?>

<div class="slideshow form large-9 medium-8 columns content">
    <?= $this->Form->create($slideshow) ?>
    <fieldset>
        <legend><?= __('Edit Slideshow') ?></legend>
        <?php
            echo $this->Form->control('Captions');
            echo $this->Form->control('Image_id', ['options' => $image]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
