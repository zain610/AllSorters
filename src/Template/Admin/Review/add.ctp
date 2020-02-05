<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
$this->Html->script('/TinyMCE/js/tiny_mce/tiny_mce.js', array(
    'inline' => false
));
?>
<style>
    .card{
        width: 100%;
    }
</style>
<div class="col-md-8">
    <div class="content table-responsive table-full-width">
        <div class="card">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create($review) ?>
            <fieldset>
                <legend><?= __('Add Review') ?></legend>
                <?php
                echo $this->Form->control('Client_Name', ['id' =>'clientNameInput']);
                echo $this->Form->control('Month_Year', ['type'=> 'date']);
                echo $this->Form->control('Suburb');
                echo $this->Form->control('Month_Year',['type'=> 'date']);
                echo $this->Form->control("Review_Details", ['type' => 'textarea', 'id' => 'reviewInput' ] )
                ?>

            </fieldset>
            <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
            <?= $this->Form->button(__('Submit'), ['formnovalidate' => true]) ?>
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
            <p><b>Client Name</b></p>
            <div><span id="previewClientName" value=""></span></div>
            <br>
            <p><b>Review Details</b></p>
            <div id="previewReviewDetails"></div>
        </div>
        <hr>
    </div>
</div>
<script type="text/javascript">
    const handlePreviewClick = () => {
        //get the data from html forms
        let clientNameVal = document.getElementById('clientNameInput').value
        let reviewDetailVal = tinymce.get("reviewInput").getContent()

        //fill in the preview card placeholders
        document.getElementById('previewClientName').textContent = clientNameVal
        document.getElementById('previewReviewDetails').innerHTML = reviewDetailVal
    }
</script>
