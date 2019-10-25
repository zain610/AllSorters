<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>

<?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>


<div class="table table-hover table-striped">
    <br>
    <div class="row">
        <div class="leftcolumn">
            <h3>Speaking Engagement description: <?= h($event->Description) ?></h3>
            <p>Venue: <?= h($event->Venue) ?></p>
            <p>Date:
                <?= h($event->Date) ?>

            </p>
            <p>Time:
                <?= h($event->Time) ?>

            </p>
        </div></div></div>
