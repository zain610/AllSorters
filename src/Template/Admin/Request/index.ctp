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
        requestArray.forEach(request => {
            let {seen} = request
            console.log(seen)
            //table-dark
            if (seen) {
                document.getElementById('table-row-content').classList.add('table-dark')
            } else {
                document.getElementById('table-row-content').classList.add('table-light')
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
            <th scope="col"><?= $this->Paginator->sort('Request_No') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Request_Email') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Cust_Fname') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Cust_Sname') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Query_info') ?></th>
            <th scope="col"><?= $this->Paginator->sort('Created') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($request as $request): ?>
            <tr id="table-row-content" class="article-row">
                <td><?= $this->Number->format($request->Request_No) ?></td>
                <td><?= h($request->Request_Email) ?></td>
                <td><?= h($request->Cust_Fname) ?></td>
                <td><?= h($request->Cust_Sname) ?></td>
                <td><?= h($request->Query_info) ?></td>
                <td><?= h($request->created) ?></td>
                <td class="action-col" style="display: block">
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
