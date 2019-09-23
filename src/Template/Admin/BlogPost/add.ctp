<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
?>
<div class="blogPost form large-9 medium-8 columns content">
    <?= $this->Form->create($blogPost) ?>
    <fieldset>
        <legend><?= __('Add Blog Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            //echo $this->Form->control('Date');
            echo $this->Form->control('Description');
            echo $this->Form->control('Body', ['type' => 'textarea']);
        ?>
    </fieldset>
    <fieldset>
        <?php
        echo $this->Form->select('image._ids',
            $image,
            ['empty'=>'(choose one)', 'multiple' => true,]
        );
        ?>
    </fieldset>

    <?= $this->Form->button(__('Submit'), ['formnovalidate' => true]) ?>
    <?= $this->Form->end() ?>
</div>
