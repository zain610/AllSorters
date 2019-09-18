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
                <?php echo $this->Flash->render() ?>
                <?php echo $this->Form->create(null, ['type'=>'file']); ?>
                <?php echo $this->Form->control('image',['type' => 'file']); ?>
                <?php
                echo $this->Form->button('Upload');
                echo $this->Form->end(); ?>

            </div>
        </div>
    </div>
</div>
</div>
