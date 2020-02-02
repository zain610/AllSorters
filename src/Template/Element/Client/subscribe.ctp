<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscriptions
 */
$prefix = $this->request->getParam('prefix');

?>

<div>
    <?= $this->Form->create(null, ['url' => ['prefix'=> 'admin','controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST', 'id'=>'newsletter-form']); ?>
        <?php echo $this->Form->control(' ', ['type' => 'email', 'placeholder'=> 'Enter Email','empty' => true, 'class' => 'form-control']); ?>
    <?= $this->Form->button(__(' Submit'),
        ['formnovalidate' => true,
            "class" => "btn btn-sm btn-special",
            "escape",
            'url' => ['prefix' => 'admin', 'controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST']) ?>
    <?= $this->Form->end() ?>
</div>
