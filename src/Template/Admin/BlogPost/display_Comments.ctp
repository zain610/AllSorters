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
        <?= $this->Html->link('Add Blog Post', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary']) ?>
    </div>
    <h3><?= __('Blog Post') ?></h3>
    <table class="articles-table table">
        <thead>
        <tr>
            <th ><?= $this->Paginator->sort('User') ?></th>
            <th ><?= $this->Paginator->sort('Comment_Details') ?></th>
            <th ><?= $this->Paginator->sort('Post_id') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($comments as $comment): ?>
                <tr class="article-row">
                    <td>
                        <?= $comment->User_Name . " by " . $comment->User_Email ?>
                    </td>
                    <td>
                        <?= $this->Text->truncate($comment->Comment_Details, 50)?>
                    </td>
                    <td>
                        <?= $comment->Post_id ?>
                    </td>
                    <td class="action-col" style="">
                        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view',  $comment->Post_id]]) ?>
                        <?php if($comment['showed']){ ?>
                            <?= $this->element('Admin/Buttons/publish', ['url' => ['action' => 'publishcomment',$comment['Post_Comment_id']]]); ?>
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
