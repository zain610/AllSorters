<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
?>

<style>
    .manage-tags {
        margin-left: 10px;
    }
</style>

<div class="title-block">
    <div class="title">
        <?= $blogpost->isNew() ? 'New' : 'Edit' ?> Blog post
        <?php if (!$blogpost->isNew()): ?>
            <span class="pull-right">
                <?php if ($blogpost->published) { ?>
                    <?= $this->element('Admin/Buttons/hide', ['url' => ['action' => 'hide', $blogpost->id]]) ?>
                    <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $blogpost->slug]]) ?>
                <?php } else {?>
                    <?= $this->element('Admin/Buttons/publish', ['url' => ['action' => 'publish', $blogpost->id]]) ?>
                    <?= $this->element('Admin/Buttons/preview', ['url' => ['action' => 'view', $blogpost->slug]]) ?>
                <?php } ?>
            </span>
        <?php endif ?>
    </div>
</div>

<div class="row">
    <div class="col-md-9">
        <div class="card card-block">
            <?php
            echo $this->Form->create($blogpost, ['id' => 'blogpost-form']);
            echo $this->Form->control('title');
            if (!$blogpost->isNew()) {
                // Don't prompt the user to enter a slug when first creating the article. We will create one
                // automatically in the Controller or Model. However, once the article is created, it may be
                // desirable for the user to change the slug.
                echo $this->Form->control('slug');
            }
            echo $this->Form->control('body', ['rows' => '10']);
            //echo $this->Form->control('tags._ids', ['options' => $tags]);
            echo $this->Form->button(__('Save Blog Post'));

            // "target" => "_blank" will mean that clicking the button will open a new tab.
            // I don't like doing this, because I think users are best placed to decide fi they want a new tab or not.
            // However, here they may spend a long time writing an article, then click "Manage Tags" and I don't want
            // them to accidentally lose their work by navigating to a different screen.
            //echo $this->Html->link('Manage tags', ['controller' => 'tags'], ['class' => 'btn btn-sm btn-oval manage-tags btn-secondary', 'target' => '_blank']);
            echo $this->Form->end();
            ?>

        </div>
    </div>
</div>

<?php $this->start('script'); ?>
<script>
    (function() {
        $("#article-form").validate({
            rules: {
                title: {
                    required: true,
                    minlength: 10
                },
                body: {
                    required: true,
                    minlength: 10,
                },
            }
        });
    })();
</script>
<?php $this->end(); ?>


<!--default-->
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">-->
<!--    <ul class="side-nav">-->
<!--        <li class="heading">--><?//= __('Actions') ?><!--</li>-->
<!--        <li>--><?//= $this->Form->postLink(
//                __('Delete'),
//                ['action' => 'delete', $blogPost->id],
//                ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]
//            )
//        ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Blog Post'), ['action' => 'index']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?><!--</li>-->
<!--        <li>--><?//= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?><!--</li>-->
<!--    </ul>-->
<!--</nav>-->
<!--<div class="blogPost form large-9 medium-8 columns content">-->
<!--    --><?//= $this->Form->create($blogPost) ?>
<!--    <fieldset>-->
<!--        <legend>--><?//= __('Edit Blog Post') ?><!--</legend>-->
<!--        --><?php
//            echo $this->Form->control('title');
//            echo $this->Form->control('Date');
//            echo $this->Form->control('Description');
//            echo $this->Form->control('Body');
//            echo $this->Form->control('image._ids', ['options' => $image]);
//        ?>
<!--    </fieldset>-->
<!--    --><?//= $this->Form->button(__('Submit')) ?>
<!--    --><?//= $this->Form->end() ?>
<!--</div>-->
