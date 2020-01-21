<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PostComment[]|\Cake\Collection\CollectionInterface $postComment
 */

$currentController = $this->request->getParam('controller');
?>
<div class="table table-hover table-striped">
    <div id="searchBarNavBar">
        <?= $this->element('Admin/Buttons/search'); ?>
    </div>
    <h3><?= 'Blog Post Comments' ?></h3>
    <table class="articles-table table">
        <thead>
        <tr>
            <th ><?= $this->Paginator->sort('Blog Post Title') ?></th>
            <th ><?= $this->Paginator->sort('Comment_Details') ?></th>
            <th ><?= $this->Paginator->sort('User') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($comments as $comment): ?>
                <tr class="article-row">
                    <td>
                        <?= $comment->blog_post->title ?>
                    </td>

                    <td>
                        <?= $this->Text->truncate($comment->Comment_Details, 50)?>
                    </td>
                    <td>
                        <?= $comment->User_Name . " by " . $comment->User_Email ?>
                    </td>

                    <td class="action-col" style="">
                        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view',  $comment->Blog_post_id]]) ?>
                        <?php if($comment['showed']){ ?>
                            <?= $this->element('Admin/Buttons/publish', ['url' => ['action' => 'publishcomment',$comment->Post_Comment_id]]); ?>
                        <?php } else{ ?>
                            <?= $this->element('Admin/Buttons/hide', ['url' => ['action' => 'publishcomment',$comment['Post_Comment_id']]]); ?>
                        <?php } ?>
                    </td>
                </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
    <div class="paginator">
        <ul class="pagination">

            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>

        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
