<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Webpage $webpage
 */
?>
<div><?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
</div>
<br>
<div class="content table-responsive table-full-width">
    <div class="row">
        <div class="leftcolumn">
            <h4>Heading: </h4>
            <p><?php echo $webpage->Heading?></p>
            <h4>Content: </h4>
            <p><?php echo $webpage->Content?></p>
        </div>
    </div>
</div>
