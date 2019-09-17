<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>

<div class="content table-responsive table-full-width">
    <h4>Review <?= h($review->Review_id) ?></h4>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client Name') ?></th>
            <td><?= h($review->Client_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review Details') ?></th>
            <td><?= h($review->Review_Details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review Id') ?></th>
            <td><?= $this->Number->format($review->Review_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suburb') ?></th>
            <td><?= $this->Number->format($review->Suburb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Year') ?></th>
            <td><?= h($review->Month_Year) ?></td>
        </tr>
    </table>
</div>
