<?php
$this->assign('title', 'Properties for sale');
?>

<div class="container">
    <ul class="list-group row properties">
        <?php foreach($properties as $property): ?>
            <li class="list-group-item property">
                <div class="image">
                    <img src="<?= $property->image_url ?>" />
                </div>
                <div class="description">
                    <h5><?= $this->Number->currency($property->list_price, '', ['places' => 0]) ?></h5>
                    <p><?= h($property->address) ?></p>
                    <?= $this->Html->link('Details', ['controller' => 'properties', 'action' => 'details', $property->id]) ?>
                </div>
            </li>
        <?php endforeach ?>
    </ul>
</div>