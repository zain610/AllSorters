<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
$this->Html->script('/TinyMCE/js/tiny_mce/tiny_mce.js', array(
    'inline' => false));
?>

<?php echo $this->Html->css('image_checkbox'); ?>


<div class="col-md-8">
    <div class="content table-responsive table-full-width">
        <div class="card">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <legend><?= __('Edit Services') ?></legend>
        <?php
            echo $this->Form->control('Service_Title');
            echo $this->Form->control('Service_Description');
            echo $this->Form->control('Service_Detail');
//            echo $this->Form->control('image._ids', ['options' => $image]);
//            echo $this->Form->control('job._ids', ['options' => $job]);
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
        </div></div></div>
