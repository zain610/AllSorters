<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscriptions
 */
?>

<h3>Sign Up to our Newsletter!</h3>
<div class="form-group">
    <?= $this->Form->create(null, ['url' => ['prefix' => 'admin', 'controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST']);
    ?>
    <fieldset>
        <?php
        echo "<br>";
        echo $this->Form->control('email_address', ['type' => 'email', 'placeholder'=> 'Enter Email','empty' => true, 'class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__(' <i class="fas fa-plus"></i> Submit'),
        ['formnovalidate' => true,
            "id" =>"submit-subscription",
            "class" => "btn btn-primary",
            "escape",
            'url' => ['prefix' => 'admin', 'controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST']
    ) ?>
    <?= $this->Form->end() ?>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
