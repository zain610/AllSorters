<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<div class="container">

    <div class="message-container">
        <div class="row mx-md-n5">
            <div class="col px-md-5"><h2>Client Message</h2></div>
            <div class="col px-md-5"><div style="display: flex" class="p-3 border bg-light"><div class="request view large-9 medium-8 columns content">
                        From: <h3><?= h($request->Request_Email) ?></h3></div></div></div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <?= $this->Form->create($request) ?>
        <fieldset>
        <?php echo $this->Form->control("Response", ['type' => 'textarea', 'id' => 'queryInput' ] ) ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['formnovalidate' => true]) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
