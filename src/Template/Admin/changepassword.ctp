<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="col-md-8">
    <div class="content table-responsive table-full-width">
        <div class="card">
            <?= $this->Form->create($admin) ?>
            <fieldset>
                <legend><?= __('Edit Account Details') ?></legend>
                <?php
                echo $this->Form->control('username');
                echo $this->Form->control('password');
                echo $this->Form->control('confirm_password',['type'=>'password']);
                if(isset($fnameerror)){ ?>
                <p style="color: red;font-weight: bold"><?php echo $fnameerror ?></p>
                <?php } ?>
                <?php echo $this->Form->control('email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>