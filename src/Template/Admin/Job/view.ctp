
<div class="table table-hover table-striped">
    <br>
    <div class="row">
        <div class="leftcolumn">
            <h3>Job</h3>
            <p>Price: <?= strip_tags($job->price) ?></p>
            <p>Job Detail: <?= strip_tags($job->job_detail)?></p>
            <p>Commence_Date:
                <?= h($job->Commence_Date) ?>
            </p>

            <p>Service type: <?= $job->service->Service_Title?></p>
        </div>
    </div>
</div>
