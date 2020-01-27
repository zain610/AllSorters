<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
?>
<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="card-body">
            <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $blogPost->blog_post_id]]) ?>
            <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'deleteImage', $blogPost->Image_id]]) ?>
        </div>
        <div class="leftcolumn">
            <h4><?php echo $blogPost->title?></h4>
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
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
    <div class="row">
        <h3>Comments</h3>
        <table>
            <?php foreach($comment as $comment){ ?>
                <tr>
                    <td><?php echo $comment['User_Name']?></td>
                    <td><?php echo $comment['User_Email']?></td>
                    <td><?php echo $comment['Comment_Details']?></td>
                    <?php if($comment['showed']==0){ ?>
                        <td style="text-align: center"><?= $this->element('Admin/Buttons/publish', ['url' => ['action' => 'publishcomment',$comment['Post_Comment_id']]]); ?></td>
                    <?php }else{ ?>
                        <td style="text-align: center"><?= $this->element('Admin/Buttons/hide', ['url' => ['action' => 'publishcomment',$comment['Post_Comment_id']]]); ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
