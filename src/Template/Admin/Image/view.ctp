<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $image
 */
?>

<div class="content table-responsive table-full-width">
    <div class="col-md-3">
            <div class="card">
            <?php echo $this->Html->image($image->path, ['alt' => 'CakePHP']); ?>
            <div class="card-body">
                <h4 class="card-title"><?php echo $image->name; ?></h4>
            </div>
        </div>
    </div>
</div>






