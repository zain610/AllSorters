<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
$this->Html->script('/TinyMCE/js/tiny_mce/tiny_mce.js', array(
    'inline' => false));
?>

<style>
    .card{
        width: 100%;
    }
</style>
<?php echo $this->Html->css('image_checkbox'); ?>

        <div class="card">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <legend><?= __('Edit Services') ?></legend>
        <?php
            echo $this->Form->control('Service_Title');
            echo $this->Form->control('Service_Detail');
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
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
        </div>
