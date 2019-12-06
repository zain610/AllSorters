<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */

$this->Html->script('/TinyMCE/js/tiny_mce/tiny_mce.js', array(
    'inline' => false
));
?>
<?php echo $this->Html->css('image_checkbox'); ?>
<script>
    function onlyOne(checkbox) {
        var checkboxes = document.getElementsByName('checkbox[]')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
</script>


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

                ?>
                <ul>
                    <?php foreach ($img_ob as $img):?>
                        <li><?= $this->Form->checkbox('checkbox[]', ['id'=>$img->Image_id,'value'=>$img->Image_id]); ?>
                            <label for="<?php echo $img->Image_id ?>"><?php echo $this->Html->image($img->path, ['class' => 'img-responsive', 'alt' => 'SlideShow images']); ?>
                            </label>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </fieldset>
           <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
           <?= $this->Form->button(__('Submit'), ['formnovalidate' => true]) ?>

           <?= $this->Form->end() ?>

        </div>
   </div>
</div>
