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
                <legend><?= __('Add Service') ?></legend>
                <?php
                echo $this->Form->control('Service_Title', ['id' =>'serviceTitlInput']);
                echo $this->Form->control('Service_Description');
                echo $this->Form->control('Service_Detail',['type' => 'textarea', 'id' => 'ServiceDetailInput' ]);
                echo $this->Form->control('image._ids', ['options' => $image]);
                echo $this->Form->control('job._ids', ['options' => $job]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['type' => 'button','formnovalidate'=>true]) ?>
           <?= $this->Form->button('Preview', ['type' => 'button', 'onclick' => 'handlePreviewClick(this)'] ) ?>
           <?= $this->Form->end() ?>
        </div>
   </div>
</div>

<div class="col-md-4">
    <div class="card card-user">
        <div class="image">
            <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
        </div>
        <div class="content">
            <p><b>Service Title</b></p>
            <div><span id="previewServiceTitle" value=""></span></div>
            <br>
            <p><b>Service Details</b></p>
            <div id="previewServiceDetail"></div>
        </div>
        <hr>
        <div class="text-center">
            <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
            <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
            <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

        </div>
    </div>
>>>>>>> 7fa78dec2cc2e7eeba1756900af062935957c85f
</div>
