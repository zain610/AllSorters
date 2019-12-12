<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BlogPost $blogPost
 */
?>
<?php echo $this->Html->css('image_checkbox'); ?>

<div class="card">
    <?= $this->Form->create($blogPost) ?>
    <fieldset>
        <legend><?= __('Edit Blog Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('Description');
            echo $this->Form->control('Body', ['type' => 'textarea']);
            //echo $this->Form->control('image._ids', ['options' => $image]);
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

    <ul>
        <?php foreach ($img_ob as $img):?>
            <li><?= $this->Form->checkbox('checkbox[]', ['id'=>$img->Image_id,'value'=>$img->Image_id]); ?>
                <label for="<?php echo $img->Image_id ?>"><?php echo $this->Html->image($img->path, ['class' => 'img-responsive', 'alt' => 'SlideShow images']); ?>
                </label>
            </li>
        <?php endforeach; ?>
    </ul>

    <?= $this->Form->button(__('Submit') ,['formnovalidate' => true]) ?>
    <?= $this->Form->end() ?>
</div>
