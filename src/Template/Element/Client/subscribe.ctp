<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subscription $subscriptions
 */
$prefix = $this->request->getParam('prefix');

?>
<style type="text/css">
    .form-group {
        /* height: fit-content; */
        align-items: center;
    }
    #submit-subscription {
        height: fit-content;
        top: 10px;
        margin-left: 1rem;
    }
</style>

<div class="form-group">
    <?= $this->Form->create(null, ['url' => ['prefix'=> 'admin','controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST', 'id'=>'newsletter-form']);
    ?>
    <fieldset style="width: 20rem; height: fit-content;">
        <?php
        echo "<br>";
        echo $this->Form->control('email_address', ['type' => 'email', 'placeholder'=> 'Enter Email','empty' => true, 'class' => 'form-control']);
        ?>
    </fieldset>

    <?= $this->Form->button(__(' Submit'),
        ['formnovalidate' => true,
            "class" => "btn btn-sm btn-special",
            "escape",
            'url' => ['prefix' => 'admin', 'controller' => 'Subscriptions', 'action' => 'add'], 'method' => 'POST']) ?>
    <?= $this->Form->end() ?>
</div>
