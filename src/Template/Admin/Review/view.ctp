<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="leftcolumn">
            <h3>Client Name: <?= h($review->Client_Name) ?></h3>
            <p><?= h($review->Month_Year) ?></p>

            <p>Suburb: <?= h($review->Suburb) ?></p>
            <p>Review Details:
                <?= h(strip_tags($review->Review_Details))?>
            </p>
        </div></div></div>
