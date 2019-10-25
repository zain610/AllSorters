<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    body {
        background-attachment: fixed;
    }

    .left {
        width: 160px;
        height: 25px;
        list-style: none;
        font-family: 'Open Sans', sans-serif;
        display: table-cell;
        color: #000000;
        margin-left: 7px;
    }

    .hide {
        color: white;
    }
    .right {
        width: auto;
        display: table-cell;
        vertical-align: top;
        background-color: #ffffff;
    }
    .card {
        /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);*/
        transition: 0.3s;
        color: #000000;
        width: 60%;
        margin-left: 125px;
    }
    .line {
        border-bottom: 1px solid darkgrey;
        height: 1px;
        width: 70%;
        margin-left:125px;
        margin-bottom:10px;

    }

    .date {
        width: 98px;
        height: 125px;
        background-color: #00A0D2;
        font-size: 20px;
        color: #ffffff;
        font-weight: 400;
        margin: auto;
        padding: 1px 0 0;
        box-sizing: border-box;
        text-align: center;
        text-transform: uppercase;
        margin-left:7px;
    }

    .title{
        margin-left:110px;
        margin-bottom:30px;
    }
    .list{
        margin-left:120px;
        font-size: 15px;
    }

    .day-of-month {
        display: block;
        font-size: 54px;
        line-height: 21px;
        font-family: 'Roboto Slab';
        margin-top: 25px;
        margin-bottom: 15px;
        margin-left:7px;

    }
    /*.card:hover {*/
    /*    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);*/
    /*}*/

    .container {
        padding: 2px 16px;
        color: #ffffff width=500;
    }
</style>


<div class="services">
    <div class="container">
        <h3>Speaking Engagements</h3>
    </div>
</div>
<div class="title">
    <h3>Upcoming Speaking Engagements</h3>
</div>
<?php foreach ($events as $event): ?>
    <?php if ($event->Published) { ?>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="left">
                        <div class = "hide">
                            <?=
                            $theDatetime = h($event['Date']);
                            $dt = new DateTime($theDatetime);
                            $time = $dt->format('h:i A');
                            $dateNum  = $dt->format('d');
                            $year  = $dt->format('Y');;
                            $monthNum  = $dt->format('n');
                            $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                            $monthName = $dateObj->format('F');
                            ?>
                        </div>
                        <div class="date">
                            <span class="day-of-month"><?= $dateNum ?></span>
                            <?= $monthName ?>
                            <p><?= $year ?></p>
                        </div>
                        <br>
                    </div>
                    <div class="right">
                        <h3><?= $time ?></h3>
                        <p> <?= h($event['Description']) ?></p>
                        <p>  <?= h($event['Venue']) ?></p>
                    </div>
                </div >
            </div >
            <div class="line"></div>
        </div >
    <?php } ?>
<?php endforeach ?>

<div class="title">
    <h3>Previous Speaking Engagements</h3>
</div>
<?php foreach ($events as $event): ?>
    <?php if ($event->Archived) { ?>
        <div class = "hide">
            <?=
            $theDatetime = h($event['Date']);
            $dt = new DateTime($theDatetime);
            $time = $dt->format('h:i A');
            $dateNum  = $dt->format('j');
            $year  = $dt->format('Y');;
            $monthNum  = $dt->format('n');
            $dateObj   = DateTime::createFromFormat('!m', $monthNum);
            $monthName = $dateObj->format('F');
            $description = h($event['Description']);
            $venue =h($event['Venue']);
            ?>
        </div>
        <div class="list">
            <ul>
                <li> <?php echo "{$dateNum} {$monthName} {$year}, $time - {$description} - {$venue}"?></li>
            </ul>
        </div>
    <?php } ?>
<?php endforeach ?>

</html>

