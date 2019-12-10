<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="row">
    <div class = 'col-mid-4 offset-md-4'>
        <?php echo $this->Flash->render() ?>
        <div class="card">
            <h3 class="card-header">Reset PW</h3>
            <div class="card-body">
                <?php echo $this->Form->create(); ?>
                <div class = 'form-group'>
                    <?php echo $this->Form->control('password',['class'=>'form-control']) ?>
                </div>
                <?php
                echo $this->Form->button('Reset PW',['class'=>'btn btn-primary','type'=>'submit']);
                ?>
            </div>
        </div>

    </div>

</div>