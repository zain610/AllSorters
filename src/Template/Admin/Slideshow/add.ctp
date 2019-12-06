<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slideshow $slideshow
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


<div class="slideshow form large-9 medium-8 columns content">
    <?= $this->Form->create($slideshow); ?>
    <fieldset>
        <legend><?= __('Add Slideshow') ?></legend>
        <?php
            echo $this->Form->control('Captions');
//            echo $this->Form->control('Image_id', ['options' => $image]);
        ?>
    </fieldset>
    <fieldset>
        <ul>
            <h3>Developing</h3>
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
