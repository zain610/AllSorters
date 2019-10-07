<?php $currentController = $this->request->getParam('controller'); ?>


<?= $this->Form->create(null, ['url' => ['prefix' => 'admin', 'controller' => $currentController, 'action' => 'search'], 'method' => 'GET']) ?>
<input class="form-control" type="text" name="query" placeholder="Search" />
<?= $this->Form->end() ?>
<a id="search-show" class="btn btn-info" href="/admin/<?=$currentController?>/simpleSearch">
    <i class="fa fa-search"></i> Search
</a>
