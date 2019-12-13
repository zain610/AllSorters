<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Footer $footer
 */
?>

<div class="footer form large-9 medium-8 columns content">
    <?= $this->Form->create($footer) ?>
    <fieldset>
        <legend><?= __('Edit Footer') ?></legend>
        <?php
            echo $this->Form->control('Phone');
            echo $this->Form->control('Email');
            echo $this->Form->control('Address');
            echo $this->Form->control('Twitter');
            echo $this->Form->control('Facebook');
            echo $this->Form->control('Google');
            echo $this->Form->control('Tumblr');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
