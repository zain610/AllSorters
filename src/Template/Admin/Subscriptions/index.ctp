<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 * @var \App\Model\Entity\BlogPost[]|\Cake\Collection\CollectionInterface $blogs
 * use Cake\Routing\Route\DashedRoute;
 */
?>
<script type="text/javascript">
    function toggle(source) {
        checkboxes = document.getElementsByClassName('form-check-input');
        for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.checked;
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
<div class="container-fluid">
    <?= $this->Form->create(null, ['url' => ['controller'=>'Subscriptions', 'action' => 'emailNewsletter'], 'type' => 'post']); ?>

    <div class="" style="">
        <h4>Newsletter</h4>
        <?= $this->Form->textarea('message') ?>
    </div>
    <hr style="border-top: 2px solid darkslategray">
    <div class="" style="">
        <div style="display: flex">
            <div class="form-check form-check-inline" style="width: 100%; display: inline-flex; margin: 1rem">
                <h4 style="width: 60%;margin-right: 1rem; margin-top: auto">Select Users to send email to</h4>
                <div style="float: right; border-radius: 15px; margin-left: auto; padding: 0 1rem; display: flex">
                    <h4>Add a subscriber</h4>
                    <?= $this->element('Client/subscribe'); ?>

                </div>
            </div>

        </div>
        <div class="container">

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
                        <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($blogs as $blog): ?>
                        <tr class="article-row">
                            <td class="">
                                <div id="div-blog-checkbox" class="form-check form-check-inline col-sm-3">
                                    <?= $this->Form->checkbox('bid'.$blog->blog_post_id, ['id'=>$this->Number->format($blog->blog_post_id), 'class'=> 'form-check-input']); ?>
                                    <label id="blog" class="form-check-label" for="<?=$this->Number->format($blog->blog_post_id)?>"><?= h($blog->blog_post_id) ?></label>
                                </div>
                            </td>

                            <td style="">
                                <?= h($blog->title) ?>
                            </td>
                            <td>
                                <?= h($blog->Description) ?>
                            </td>
                            <td>
                                <?=h($blog->modified) ?>
                            </td>
                            <td class="action-col">
                                <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $blog->blog_post_id]]) ?>
                                <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $blog->blog_post_id]]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <?= $this->Form->button('Submit', ['class'=>'btn btn-primary']); ?>

    <?=  $this->Form->end(); ?>


</div>
