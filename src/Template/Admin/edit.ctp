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
                <legend><?= __('Edit Admin') ?></legend>
                <?php
                echo $this->Form->control('username');
                echo $this->Form->control('password');
                echo $this->Form->control('email');
                echo $this->Form->control('phone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
