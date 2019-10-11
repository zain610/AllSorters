<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
?>

<div class="card">
    <?= $this->Form->create($blogPost) ?>
    <fieldset>
        <legend><?= __('Edit Blog Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('Date');
            echo $this->Form->control('Description');
            echo $this->Form->control('Body');
            //echo $this->Form->control('image._ids', ['options' => $image]);
        ?>
    </fieldset>
    <fieldset>
        <?php
        echo $this->Form->select('image._ids',
            $image,
            ['empty'=>'(choose one)', 'multiple' => true,]
        );
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
