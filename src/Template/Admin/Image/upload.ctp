<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<?= $this->layout('Admin'); ?>
<div class="content table-responsive table-full-width">
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <?php echo $this->Form->create(null, ['type'=>'file']); ?>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>

                <?php
                echo $this->Form->button('Upload',[
                    'class'=> 'btn btn-primary',
                    'type' => 'submit'
                ]);
                echo $this->Form->end(); ?>
                <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
                </div>

        </div>
    </div>

</div>
</div>
