<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
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
<div class="product form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('price');
            echo $this->Form->control('stock');
        ?>
        <ul>
            <?php foreach ($img_ob as $img):?>
                <li><?= $this->Form->checkbox('checkbox[]', ['id'=>$img->Image_id,'value'=>$img->Image_id,'onclick'=>'onlyOne(this)']); ?>
                    <label for="<?php echo $img->Image_id ?>"><?php echo $this->Html->image($img->path, ['class' => 'img-responsive', 'alt' => 'SlideShow images']); ?>
                    </label>
                </li>
            <?php endforeach; ?>
        </ul>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
