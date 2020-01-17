<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admin
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $request
 */
?>
<head>
    <style>
        .content h3 {
            color: #0016be;
            padding-bottom: 0.5rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded',() =>{
        var requestArray = <?php echo json_encode($request); ?>;
        requestArray.forEach((request, index) => {
            let {Response}= request
            console.log(Response, index)
            let tableRows = document.getElementsByClassName('article-row');
            if (Response!== null){
                tableRows[index].classList.add('table-dark')
            } else {
                tableRows[index].classList.add('table-light')
            }
        })
    })
</script>


<div class="table table-hover">
    <h3><?= "Contact Us Queries" ?></h3>
    <div style="overflow:auto; width:100%; height: 600px; border: 0px solid #000000; margin-top: 0px;">
        <table class="articles-table table" cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('#') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Request_Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cust_Fname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cust_Sname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Query_info') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($request as $request): ?>
                <tr id="table-row-content-request" class="article-row">
                    <td><?= $this->Number->format($request->Request_No) ?></td>
                    <td><?= h($request->Request_Email) ?></td>
                    <td><?= h($request->Cust_Fname) ?></td>
                    <td><?= h($request->Cust_Sname) ?></td>
                    <td><?= h($request->Query_info) ?></td>
                    <td><?= h($request->created) ?></td>
                    <td class="action-col" style="display: block">
                        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'request/view', $request->Request_No]]) ?>
                        <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'request/delete', $request->Request_No]]) ?>
                    </td>
                </tr>
                <td id="table-empty-row"></td>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <h3><?= "Blog Comments" ?></h3>

    <div     style="overflow:auto; width:100%; height: 600px; border: 0px solid #000000;margin-top: 10px;">
        <table class="articles-table table" cellpadding="0" cellspacing="0">
            <thead>
            <tr>
                <th ><?= $this->Paginator->sort('Blog Post Title') ?></th>
                <th ><?= $this->Paginator->sort('Comment_Details') ?></th>
                <th ><?= $this->Paginator->sort('User') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as $comment): ?>
                <tr id="table-row-content-comment" class="article-row">
                    <td>
                        <?= $comment->blog_post->title ?>
                    </td>

                    <td>
                        <?= $this->Text->truncate($comment->Comment_Details, 50)?>
                    </td>
                    <td>
                        <?= $comment->User_Name . " by " . $comment->User_Email ?>
                    </td>

                    <td class="action-col" style="display: block">
                        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'blog-post/view',  $comment->Blog_post_id]]) ?>
                        <?php if($comment['showed']){ ?>
                            <?= $this->element('Admin/Buttons/publish', ['url' => ['action' => 'blog-post/publishcomment',$comment->Post_Comment_id]]); ?>
                        <?php } else{ ?>
                            <?= $this->element('Admin/Buttons/hide', ['url' => ['action' => 'blog-post/publishcomment',$comment['Post_Comment_id']]]); ?>
                        <?php } ?>
                    </td>
                </tr>
                <td id="table-empty-row"></td>

            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>




