<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\About $about
 */
?>
</nav>
<div class="card">
    <?= $this->Form->create($about) ?>
    <fieldset>
        <legend><?= __('Add to About Us') ?></legend>
        <?php
        echo "<br>";
        echo $this->Form->control('Title', ['type'=> 'textarea']);
        echo $this->Form->control('Content',['type'=> 'textarea']);
        ?>
    </fieldset>
    <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
    <?= $this->Form->button(__('Submit'), ['formnovalidate' => true]) ?>
    <?= $this->Form->end() ?>
</div>
