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
                <legend><?= __('Profile') ?></legend>
                <?php
                echo $this->Form->control('username');
                echo $this->Form->control('email');
                echo $this->Form->control('phone');
                echo $this->Form->control('Confirm_Password', ['type'=>'password','autocomplete' => 'new-password']);

                if(isset($fnameerror)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $fnameerror ?></p>
                <?php } ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div>
