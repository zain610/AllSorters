<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
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
        console.log(something)


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
            <div class="form-check form-check-inline" style="width: 100%; display: inline-flex">
                <h4 style="width: 60%">Select Users to send email to</h4>


                <input onclick="toggle(this)" class="" type="checkbox" id="selectAll" value="selectAll">
                <label class="form-check-label" for="selectAll">Select all</label>
            </div>
        </div>
        <div class="container">

            <div class="row">


                <?php foreach ($subscriptions as $subscription): ?>
                    <div id="div-subscriber-checkbox" class="form-check form-check-inline col-sm-3">
                        <?= $this->Form->checkbox($subscription->id, ['id'=>$this->Number->format($subscription->id), 'class'=> 'form-check-input']); ?>
                        <label id="subscriber" class="form-check-label" for="<?=$this->Number->format($subscription->id)?>"><?= h($subscription->email_address) ?></label>

                        <button  id="deleteSubscriberBtn" onclick="deleteSubscriber(<?=$subscription->id?>)" type="button" class="close" aria-label="Close" style="color: red;opacity: 1;">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>


                <?php endforeach; ?>

            </div>


        </div>
    </div>

    <?= $this->Form->button('Submit', ['class'=>'btn btn-primary']); ?>

    <?=  $this->Form->end(); ?>
    <div>
        <h5>Add a subscriber</h5>
        <?= $this->element('Client/subscribe'); ?>

    </div>

</div>
