<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */

$this->Html->script('/TinyMCE/js/tiny_mce/tiny_mce.js', array(
    'inline' => false
));
?>

<div class="col-md-8">
   <div class="content table-responsive table-full-width">
       <div class="card">
            <?= $this->Form->create($service) ?>
            <fieldset>
                <legend><?= __('Add Services') ?></legend>
                <?php
                echo $this->Form->control('Service_Title', ['id' =>'serviceTitleInput']);
                echo $this->Form->control('Service_Description');
                echo $this->Form->control('Service_Detail',['type' => 'textarea', 'id' => 'ServiceDetailInput' ]);
                echo $this->Form->control('image._ids', ['options' => $image]);
                echo $this->Form->control('job._ids', ['options' => $job]);
                ?>
            </fieldset>
           <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
           <?= $this->Form->button(__('Submit'), ['formnovalidate' => true]) ?>

           <?= $this->Form->end() ?>

        </div>
   </div>
</div>
