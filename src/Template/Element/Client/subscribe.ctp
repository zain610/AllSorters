<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscriptions
 */
?>

<div class="form-group">
    <?= $this->Form->create(null, ['url' => ['prefix' => false,'controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST']);
    ?>
    <fieldset>
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
            'url' => ['prefix'=> false,'controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST']) ?>
    <?= $this->Form->end() ?>
</div>
