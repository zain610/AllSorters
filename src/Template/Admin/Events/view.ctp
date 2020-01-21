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
            <h3>Speaking Engagement description: <?= strip_tags($event->Description) ?></h3>
            <p>Venue: <?= strip_tags($event->Venue) ?></p>
            <p>Date:
                <?= h($event->Date->format('d-m-Y')) ?>

            </p>
            <p>Time:
                <?= $event->Time->i18nFormat([\IntlDateFormatter::NONE, \IntlDateFormatter::SHORT]) ?>

            </p>
        </div></div></div>
