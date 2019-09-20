<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $image
 */
?>
<?= $this->layout('Admin') ?>
<div class="content table-responsive table-full-width">
    <div class="col-md-3">
        <?php foreach ($image as $img): ?>
        <div class="card">
            <img src="<?php echo $img->path; ?>"
            <div class="card-body">
                <h4 class="card-title"><?php echo $img->name; ?></h4>
            </div>

        </div>
        <?php endforeach; ?>
    </div>
</div>
