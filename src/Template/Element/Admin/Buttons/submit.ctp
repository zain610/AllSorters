<?php $currentController = $this->request->getParam('controller'); ?>


<?= $this->Form->create(null, ['url' => ['prefix' => 'admin', 'controller' => $currentController, 'action' => 'add'], 'method' => 'GET']) ?>
<?= $this->Form->button(__(' <i class="fa fa-search"></i> Search'),
    ['formnovalidate' => true,
        "id" =>"search-show",
        "class" => "btn btn-info",
        "escape",
        'url' => ['prefix' => 'admin', 'controller' => $currentController, 'action' => 'advanceSearch'], 'method' => 'GET']
) ?>
<?= $this->Form->end() ?>


