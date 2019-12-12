<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="title-block">
    <div class="title">
        <h3>Products</h3>
        <?= $this->Html->link('Add Product', ['action' => 'add'], ['class' => 'pull-right btn btn-oval btn-primary','style'=>'align:right']) ?>
    </div>
</div>
<div class="table table-hover table-striped">
    <div class="articles-table table">
        <table class="articles-table table">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('image') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('stock') ?></th>
            <th scope="col"><?= $this->Paginator->sort('price') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td width = 15%><?php if($product->Image_id != '') { ?><?=  $this->Html->image($product->image->path, array('width' => '100px')); ?> <?php }; ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= $this->Number->format($product->stock) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td class="actions">
                    <?= $this->element('Admin/Buttons/edit', ['url' => ['action' => 'edit', $product->product_id]]) ?>
                    <?php if ($product->achieved){
                        echo $this->element('Admin/Buttons/restore', ['url' => ['action' => 'restore', $product->product_id]]);
                    }else{
                        echo $this->element('Admin/Buttons/archive', ['url' => ['action' => 'archive', $product->product_id]]);
                    }
                    ?>
                    <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'delete', $product->product_id]]) ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
</div>
