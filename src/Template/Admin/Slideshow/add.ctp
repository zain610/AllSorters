<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slideshow $slideshow
 */
?>
<?php echo $this->Html->css('image_checkbox'); ?>



<div class="slideshow form large-9 medium-8 columns content">
    <?= $this->Form->create($slideshow, ['url' => ['controller'=>'Slideshow', 'action' => 'getSelectedImages'], 'type' => 'post']); ?>
    <fieldset>
        <legend><?= __('Add Slideshow') ?></legend>
        <?php
            echo $this->Form->control('Captions');
//            echo $this->Form->control('Image_id', ['options' => $image]);
        ?>
    </fieldset>

    <ul>
        <?php foreach ($image as $img):?>
        <li><?= $this->Form->checkbox($img->Image_id, ['id'=>$this->Number->format($img->Image_id)]); ?>
            <label id="image_id" for="<?php echo $img->Image_id ?>"><?php echo $this->Html->image($img->path, ['class' => 'img-responsive', 'alt' => 'SlideShow images']); ?>
            </label>
        </li>
        <?php endforeach; ?>
    </ul>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
