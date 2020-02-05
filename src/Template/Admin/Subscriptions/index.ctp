<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 * @var \App\Model\Entity\BlogPost[]|\Cake\Collection\CollectionInterface $blogs
 * use Cake\Routing\Route\DashedRoute;
 */
?>
<head>
</head>
<?php echo $this->Html->script('tinymce/tinymce.min.js');?>

<script type="text/javascript">
    function toggle(source) {
        checkboxes = document.getElementsByClassName('form-check-input');
        for(var i=0, n=checkboxes.length;i<n;i++) {
            let isSubscriber = checkboxes[i].getAttribute('name').startsWith("sid");
            if(isSubscriber) {
                console.log(checkboxes[i], isSubscriber);
                checkboxes[i].checked = source.checked;
            }

        }
    }
    function deleteSubscriber(something) {
        console.log(something);


        $.ajax('/admin/subscriptions/deleteSubscriber', {
            type: 'POST',
            data: {
                id: something
            },
            success: () => {
                location.reload()
            }
        })

    }


</script>
<?= $this->Flash->render() ?>

<div class="container-fluid">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsletterModal" data-whatever="@mdo">Add Subscriber</button>

    <!-- Modal -->
    <div class="modal fade" data-backdrop="false" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="width: 100%;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Add a Subscriber</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <div style="display: flex">
                    <div class="form-check form-check-inline" style="margin: 1rem">
                        <div style="border-radius: 15px; margin-left: auto; padding: 2rem; border: 1.5px solid;">
                            <?= $this->element('Client/subscribe'); ?>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>


    <?= $this->Form->create(null, ['url' => ['controller'=>'Subscriptions', 'action' => 'emailNewsletter'], 'type' => 'post']); ?>
    <div class="" style="">
        <h4>Newsletter</h4>
        <?= $this->Form->button('Submit', ['class'=>'btn btn-primary']); ?>
        <?= $this->Form->textarea('message') ?>
    </div>
    <hr style="border-top: 2px solid darkslategray">
    <div class="" style="">
        <div class="container">
            <h4 style="width: 60%;margin-right: 1rem; margin-top: auto">Select Users to send email to</h4>
            <P style="color: #be140b">(* Delete Subscribers by clicking <span aria-hidden="true">×</span>)</P>

            <div class="form-check form-check-inline">
                <input onclick="toggle(this)" class="" type="checkbox" id="selectAll" value="selectAll">
                <label class="form-check-label" for="selectAll">Select all</label>
            </div>

            <div class="row">


                <?php foreach ($subscriptions as $key => $subscription): ?>
                    <div id="div-subscriber-checkbox" class="form-check form-check-inline col-sm-3">
                        <?= $this->Form->checkbox('sid'.$subscription->id, ['id'=>$this->Number->format($subscription->id), 'class'=> 'form-check-input']); ?>
                        <label id="subscriber" class="form-check-label" for="<?=$this->Number->format($subscription->id)?>"><?= h($subscription->email_address) ?></label>

                        <button  id="deleteSubscriberBtn" onclick="deleteSubscriber(<?=$subscription->id?>)" type="button" class="close" aria-label="Close" style="color: red;opacity: 1;">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>


                <?php endforeach; ?>

            </div>


        </div>
        <hr style="border-top: 2px solid darkslategray">
        <div class="" style="">
            <div class="" style="">
                <h4>Select Blogs </h4>
            </div>
            <div class="table table-hover table-striped">
                <table class="articles-table table ">
                    <thead>
                    <tr>
                        <th scope="col" style="width: 10%;">Select</th>
                        <th scope="col"><?= $this->Paginator->sort('title', ['model' => 'BlogPost']) ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified', ['model' => 'BlogPost']) ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody class="fa-ul">
                    <?php foreach ($blogs as $blog): ?>
                        <tr class="article-row">
                            <td class="">
                                <div id="div-blog-checkbox" class="form-check form-check-inline col-sm-3">
                                    <label style="color: transparent" id="blog" class="form-check-label" for="<?=$this->Number->format($blog->blog_post_id)?>"><?= h($blog->blog_post_id) ?></label>

                                    <?= $this->Form->checkbox('bid'.$blog->blog_post_id, ['id'=>$this->Number->format($blog->blog_post_id), 'class'=> 'form-check-input', 'hiddenField' => false]) ?>
                                </div>
                            </td>
                            <td style="">
                                <?= h($blog->title) ?>
                            </td>
                            <td>
                                <?=h($blog->modified) ?>
                            </td>
                            <td class="action-col">
                                <?= $this->element('Admin/Buttons/view', ['url' => ['controller'=>'BlogPost','action' => 'view', $blog->blog_post_id]]) ?>
                                <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $blog->blog_post_id]]) ?>
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

        </div>
    </div>



    <?=  $this->Form->end(); ?>


</div>
