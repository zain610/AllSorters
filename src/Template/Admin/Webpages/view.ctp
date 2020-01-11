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
            <?php $val= h($webpage['Webpage']); ?>
            <?php if ($val === 'Speaking Engagements') {?>
                <h4>Content: </h4>
                <p> <?php echo $webpage->Content ?></p>
            <?php } ?>
        </div>
    </div>
    <iframe src="http://localhost:8765/" width="100%" height="1000px"  name="targetframe" allowTransparency="true" frameborder="0" >
    </iframe>
</div>
