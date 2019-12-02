<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
<?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>

<div class="card">
    <?= $this->Form->create($about) ?>
    <fieldset>
        <legend><?= __('Edit About Us Section') ?></legend>
        <?php
        echo "<br>";
        echo $this->Form->control('Title', ['type'=> 'textarea']);
        echo $this->Form->control('Content',['type'=> 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
