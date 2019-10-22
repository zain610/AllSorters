<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription[]|\Cake\Collection\CollectionInterface $subscriptions
 */
?>
<script type="text/javascript">
    function toggle(source) {
        checkboxes = document.getElementsByClassName('form-check-input');
        for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.checked;
        }
    }
</script>
<div class="container-fluid">
    <div class="" style="">
        <h4>Newsletter</h4>
        <textarea></textarea>
    </div>
    <hr style="border-top: 2px solid darkslategray">
    <div class="" style="">
        <div style="display: flex">
            <h4 style="width: 60%">Select Users to send email to</h4>
            <div class="form-check form-check-inline">
                <input onclick="toggle(this)" class="" type="checkbox" id="selectAll" value="selectAll">
                <label class="form-check-label" for="selectAll">Select all</label>

            </div>

        </div>
        <div class="container">

            <div class="row">
                <?= $this->Form->create(null, ['url' => ['controller'=>'Subscriptions', 'action' => 'emailNewsletter'], 'type' => 'post']); ?>


                <?php foreach ($subscriptions as $subscription): ?>
                    <div id="div-subscriber-checkbox" class="form-check form-check-inline col-sm-3">
                        <?= $this->Form->checkbox($subscription->id, ['id'=>$this->Number->format($subscription->id), 'class'=> 'form-check-input']); ?>
                        <label class="form-check-label" for="<?=$this->Number->format($subscription->id)?>"><?= h($subscription->email_address) ?></label>
                    </div>


                <?php endforeach; ?>
                <?= $this->Form->button('Submit', ['class'=>'btn btn-primary']); ?>
                <?=  $this->Form->end(); ?>


            </div>


        </div>
    </div>
</div>
