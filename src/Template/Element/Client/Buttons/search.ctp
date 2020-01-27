
<?php $currentController = $this->request->getParam('controller'); ?>

<?= $this->Form->create(null, ['url' => ['prefix' => false, 'controller' => $currentController, 'action' => 'advanceSearch'], 'class' => 'search-form', 'method' => 'GET']) ?>
<div class="input-bar">
    <div class="input-bar-item width100">
        <form>
            <div class="form-group">
                <input class="form-control" type="text" name="query" placeholder="Search">
            </div>
        </form>
    </div>
    <div class="input-bar-item">
        <?= $this->Form->button(' <i class="ti-search"></i> Search',
            ['formnovalidate' => true,
                "id" =>"search-show",
                "class" => "btn btn-secondary",
                "escape",
                'url' => ['prefix' => false,'controller' => $currentController, 'action' => 'advanceSearch'], 'method' => 'GET']
        ) ?>
    </div>
</div>
<?= $this->Form->end() ?>


