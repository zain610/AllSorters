<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tip $tip
 */
?>
<?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>

<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="leftcolumn">
            <h4>Title: </h4>
            <p><?php echo $tip->Title?></p>
            <h4>Content: </h4>
            <p><?php echo $tip->Content?></p>
        </div>
    </div>
</div>
