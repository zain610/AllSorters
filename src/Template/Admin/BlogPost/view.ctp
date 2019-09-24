<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
?>
<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="leftcolumn">
            <h3>Title: <?= h($blogPost->title) ?></h3>
            <h4>Description: <?= h($blogPost->Description) ?></h4>

            <p>Date: <?= h($blogPost->Date) ?></p>
            <p>Modified: <?= h($blogPost->modified) ?></p>
            <p>Details: <?= h($blogPost->Body) ?></p>

    <div class="related">
        <h4><?= __('Related Image') ?></h4>
        <?php if (!empty($blogPost->image)): ?>
        <table cellpadding="0" cellspacing="0">
            <?php foreach ($blogPost->image as $image): ?>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
        <div class="content table-responsive table-full-width">
            <div class="col-md-3">
                <div class="card">
                    <?php echo $this->Html->image($image->path, ['alt' => 'CakePHP']); ?>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $image->name; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div></div>
