<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Admin $admin
 */
?>
<div class="col-md-8">
    <div class="content table-responsive table-full-width">
        <div class="card">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create($admin) ?>
            <fieldset>
                <legend><?= __('Change Password') ?></legend>
                <?php
                echo $this->Form->control('Enter_Your_Passward',['type'=>'password']);
                echo $this->Form->control('New_Password',['type'=>'password']);
                echo $this->Form->control('Confirm_Password',['type'=>'password']);
                if(isset($fnameerror)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $fnameerror ?></p>
                <?php } ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div>
