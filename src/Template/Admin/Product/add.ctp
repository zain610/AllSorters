<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
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

<div class="card">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
            echo $this->Form->control('stock');
        ?>
    </fieldset>
    <fieldset>
        <ul>
            <?php foreach ($img_ob as $img):?>
                <li><?= $this->Form->checkbox('checkbox[]', ['id'=>$img->Image_id,'value'=>$img->Image_id,'onclick'=>'onlyOne(this)']); ?>
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

