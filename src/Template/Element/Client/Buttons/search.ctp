<?php $currentController = $this->request->getParam('controller'); ?>


<?= $this->Form->create(null, ['url' => ['prefix' => false, 'controller' => $currentController, 'action' => 'advanceSearch'], 'method' => 'GET']) ?>
<input class="form-control" type="text" name="query" placeholder="Search" />
<?= $this->Form->button(__(' <i class="fa fa-angle-right"></i> Search'),
    ['formnovalidate' => true,
        "id" =>"search-show",
        "class" => "btn btn-default btn-lg ",
        "escape",
        'url' => ['prefix' => false,'controller' => $currentController, 'action' => 'advanceSearch'], 'method' => 'GET']
) ?>
<?= $this->Form->end() ?>


