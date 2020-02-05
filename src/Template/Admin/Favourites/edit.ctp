<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favourite $favourite
 */
?>
<style>
    .card{
        width: 100%;
    }
</style>
<div class="card">
    <?= $this->Form->create($favourite) ?>
    <fieldset>
        <legend><?= __('Edit Favourites') ?></legend>
        <?php
        echo "<br>";
        echo $this->Form->control('Title');
        echo $this->Form->control('Content',['type'=> 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

