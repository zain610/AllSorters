<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
?>
<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="leftcolumn">
            <h4><?php echo $blogPost->title?></h4>
            <p><?php echo $blogPost->Description?></p>
            <a><?php echo $blogPost->Body?></a>
        </div>

    </div>
    <div class="related">
        <h4><?= __('Related Image') ?></h4>
        <?php if (!empty($blogPost->image)): ?>
        <table cellpadding="0" cellspacing="0">
        <tbody>
            <?php foreach ($blogPost->image as $image): ?>
            <tr>
                <td class="card" width="50%">
                    <?php echo $this->Html->image($image->path, ['alt' => 'CakePHP']); ?>
                </td>
                <td class="card-body">
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $blogPost->blog_post_id]]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
