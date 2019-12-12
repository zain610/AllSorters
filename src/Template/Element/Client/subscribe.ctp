<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscriptions
 */
$prefix = $this->request->getParam('prefix');

?>

<div class="form-group">
    <?= $this->Form->create(null, ['url' => ['controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST', 'id'=>'newsletter-form']);
    ?>
    <fieldset style="width: 80%">
        <?php
        echo "<br>";
        echo $this->Form->control('email_address', ['type' => 'email', 'placeholder'=> 'Enter Email','empty' => true, 'class' => 'form-control']);
        ?>
    </fieldset>

    <?= $this->Form->button(__(' Submit'),
        ['formnovalidate' => true,
            "id" =>"submit-subscription",
            "class" => "btn btn-primary",
            "escape",
            'url' => ['controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST']) ?>
    <?= $this->Form->end() ?>
</div>
