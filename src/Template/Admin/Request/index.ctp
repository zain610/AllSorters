<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $request
 */
?>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', () => {
        //parse the request object to be compatible with javascript
        var requestArray = <?php echo json_encode($request); ?>;
        requestArray.forEach((request, index) => {
            let {Response}= request
            console.log(Response, index)
            //get list of table rows with the class name article-row
            let tableRows = document.getElementsByClassName('article-row');
            //if response is given
            if (Response!== null) {
                tableRows[index].classList.add('table-dark')
            } else {
                tableRows[index].classList.add('table-light')
            }

        })

    })


</script>

<div id="searchBarNavBar">
    <?= $this->element('Admin/Buttons/search'); ?>
</div>
<div class="table table-hover">
    <h3><?= __('Request') ?></h3>
    <table class="articles-table table" cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th class="table-column-one" scope="col"><?= $this->Paginator->sort('Request_Email') ?></th>
            <th class="table-column-one" scope="col"><?= $this->Paginator->sort('Cust_Fname') ?></th>
            <th class="table-column-one" scope="col"><?= $this->Paginator->sort('Cust_Sname') ?></th>
            <th class="table-column-one" scope="col"><?= $this->Paginator->sort('Query_info') ?></th>
            <th class="table-column-one" scope="col"><?= $this->Paginator->sort('Created') ?></th>
            <th class="table-column-actions" scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($request as $request): ?>
            <tr id="table-row-content" class="article-row">
                <td><?= h($request->Request_Email) ?></td>
                <td><?= h($request->Cust_Fname) ?></td>
                <td><?= h($request->Cust_Sname) ?></td>
                <td><?= h($request->Query_info) ?></td>
                <td><?= h($request->created) ?></td>
                <td class="action-col">
                    <?= $this->element('Admin/Buttons/view', ['url' => ['action' => 'view', $request->Request_No]]) ?>
                    <?= $this->element('Admin/Buttons/delete', ['url' => ['action' => 'delete', $request->Request_No]]) ?>
                </td>
            </tr>
            <td id="table-empty-row"></td>
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
