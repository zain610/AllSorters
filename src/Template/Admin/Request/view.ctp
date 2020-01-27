<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<div class="container">
    <td class="action-col" style="">
        <h3>Actions</h3>
        <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $request->Request_No]]) ?>
        <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $request->Request_No]]) ?>
        <?= $this->element('Admin/Buttons/Archive', ['url' => ['action' => 'archive', $request->Request_No], ['confirm' => __('Are you sure you want to archive # {0}?', $request->id)]]) ?>
    </td>

    <div class="message-container">
        <div class="row mx-md-n5">
            <div class="col-md-7">
                <h2>Client Message</h2>
                <hr>
                <p><b><?= h($request->Query_info) ?></b></p>
            </div>
            <div class="col-md-5"><div style="display: flex" class="p-3 border bg-light"><div class="request view large-9 medium-8 columns content">
                        From: <h3><?= h($request->Request_Email) ?></h3></div></div></div>
        </div>
        <hr>

        <?php if(empty($request->Response)) { ?>
            <?= $this->Form->create($request) ?>
            <fieldset>
                <?php echo $this->Form->control("Response", ['type' => 'textarea', 'id' => 'queryInput' ] ) ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['formnovalidate' => true]) ?>
            <?= $this->Form->end() ?>
        <?php } else { ?>
            <fieldset>
                <h3>Response: <?= h(strip_tags($request->Response)) ?></h3>
            </fieldset>
        <?php } ?>

    </div>
</div>
