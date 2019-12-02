<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favourite $favourite
 */
?>
<div><?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
</div>
<br>
<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="leftcolumn">
            <h4>Title: </h4>
            <p><?php echo $favourite->Title?></p>
            <h4>Content: </h4>
            <p><?php echo $favourite->Content?></p>
        </div>
    </div>
</div>

