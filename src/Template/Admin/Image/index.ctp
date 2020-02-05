<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $image
 */
?>
<?= $this->layout('Admin'); ?>
<div class="table table-hover table-striped">
    <div class="articles-table table">
        <table class="articles-table table">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($image as $img): ?>
                <tr>
                    <td><?php echo $this->Html->image($img->path, ['alt' => 'CakePHP', 'width' => '100px']); ?></td>
                    <td><?= h($img->name) ?></td>
                    <td class="actions">
                        <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $img->Image_id]]) ?>
                        <?php if (!($img->Shown)): ?>
                        <?= $this->element('Admin/Buttons/display', ['url' => ['action' => 'ShowOnGallery', $img->Image_id]]) ?>
                        <?php else: ?>
                        <?= $this->element('Admin/Buttons/hide', ['url' => ['action' => 'NotShowOnGallery', $img->Image_id]]) ?>
                        <?php endif;?>
                        <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'delete', $img->Image_id]]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-oval btn-primary','style'=>'float:left']) ?>
</div>
</div>
