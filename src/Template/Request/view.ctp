<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<div class="request view large-9 medium-8 columns content">
    <h3><?= h($request->Request_No) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Request Email') ?></th>
            <td><?= h($request->Request_Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Query Info') ?></th>
            <td><?= h($request->Query_info) ?></td>
        </tr>
        <tr>
        <tr>
            <th scope="row"><?= __('Request No') ?></th>
            <td><?= $this->Number->format($request->Request_No) ?></td>
        </tr>
    </table>
</div>
