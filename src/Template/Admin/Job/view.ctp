
<div class="table table-hover table-striped">
    <br>
    <div class="row">
        <div class="leftcolumn">
            <h3>Job Information</h3>
            <p>Price: <?= strip_tags($job->price) ?></p>
            <p>Job Details: <?= strip_tags($job->job_detail)?></p>
            <p>Commencing Date:
                <?= h($job->Commence_Date->format('d-m-Y')) ?>
            </p>

            <p>Service type: <?= $job->service->Service_Title?></p>
        </div>
    </div>
</div>
