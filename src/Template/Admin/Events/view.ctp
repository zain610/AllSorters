<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>

<?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>


<div class="table table-hover table-striped">
    <div class="row">
        <div class="leftcolumn">
            <h3>Speaking Engagement description: <?= h($event->description) ?></h3>
            <p>Venue: <?= h($event->venue) ?></p>
            <p>Date & time:
                <?= h($event->date) ?>

            </p>
        </div></div></div>
