<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscription
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Subscriptions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="subscriptions form large-9 medium-8 columns content">
    <?= $this->Form->create($subscription) ?>
    <fieldset>
        <legend><?= __('Add Subscription') ?></legend>
        <?php
            echo $this->Form->control('email_address');
            echo $this->Form->control('subscription_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
