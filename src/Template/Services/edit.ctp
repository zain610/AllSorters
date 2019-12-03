<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $service->Service_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $service->Service_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Image'), ['controller' => 'Image', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Image', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job'), ['controller' => 'Job', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Job', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="service form large-9 medium-8 columns content">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <legend><?= __('Edit Services') ?></legend>
        <?php
            echo $this->Form->control('Service_Title');
            echo $this->Form->control('Service_Description');
            echo $this->Form->control('Service_Detail');
            echo $this->Form->control('image._ids', ['options' => $image]);
            echo $this->Form->control('job._ids', ['options' => $job]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
