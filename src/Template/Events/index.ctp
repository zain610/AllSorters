<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $webpage
 * @var \App\Model\Entity\Request[]|\Cake\Collection\CollectionInterface $event
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        /*margin-left:120px;*/
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

        color: #ffffff width=500;
    }
</style>

<div class="gtco-loader"></div>

<div id="page">


    <div class="gtco-section">
        <div class="gtco-container">
            <div class="row gtco-heading">
                <?php foreach ($webpages as $webpage): ?>
                    <?php $name = $webpage -> Webpage;?>
                    <?php if ($name === 'Speaking Engagements') { ?>
                        <?php $heading = $webpage -> Heading; ?>
                        <?php $content = $webpage -> Content; ?>
                <div class="col-md-12 text-left" style="">
                    <h2 align="middle"><?php echo $heading ?></h2>
                    <p style="padding-top: 10px">
                        <?php echo $content ?>
                    </p>
                </div>

                <?php } ?>
                <?php endforeach ?>
            </div>
            <div>
            <h2>Upcoming Speaking Engagement</h2>

            <?php foreach ($events as $event): ?>
            <?php if ($event->Published) { ?>
            <div class="row" style=margin-top: 30px">
                <div class="column">
                    <div>
                        <div class="left">
                            <div class = "hide"">
                            <?=
                            $theDatetime = h($event['Date']);
                            $dt = new DateTime($theDatetime);
                            $theTime = $event->Time;
                            $time = $theTime->format('h:i A');
                            $dateNum  = $dt->format('d');
                            $year  = $dt->format('Y');;
                            $monthNum  = $dt->format('n');
                            $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                            $monthName = $dateObj->format('M');
                            ?>
                        </div>
                        <div class="date">
                            <span class="day-of-month"><?= $dateNum ?></span>
                            <?= $monthName ?>
                            <p><?= $year ?></p>
                        </div>
                        <br>
                    </div>
                    <div class="right" style="padding-top: 12px">
                        <h3><?= $time ?></h3>
                        <p> <?= h(strip_tags($event['Description'])) ?></p>
                        <p>  <?= h(strip_tags($event['Venue'])) ?></p>
                    </div>
                </div >
            </div >

        </div>
        <div class="line" style="padding-top: -100px"></div>
        <?php } ?>
        <?php endforeach ?>
        </div>
<div style="padding-top: 20px">
        <h2>Previous Speaking Engagements</h2>

        <?php foreach ($events as $event): ?>
            <?php if ($event->Archived) { ?>
                <div class = "hide">
                    <?=
                    $theDatetime = h($event['Date']);
                    $dt = new DateTime($theDatetime);
                    $theTime = $event->Time;
                    $time = $theTime->format('h:i A');
                    $dateNum  = $dt->format('j');
                    $year  = $dt->format('Y');;
                    $monthNum  = $dt->format('n');
                    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                    $monthName = $dateObj->format('M');
                    $description = h(strip_tags($event['Description']));
                    $venue =h(strip_tags($event['Venue']));
                    ?>
                </div>
                <div class="list">
                    <ul>
                        <li> <?php echo "{$dateNum} {$monthName} {$year}, $time - {$description} - {$venue}"?></li>
                    </ul>
                </div>
            <?php } ?>
        <?php endforeach ?>
    </div>
    </div>


<!-- END Work -->

<div class="gtco-section" style="padding-bottom: 100px">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-6 gtco-news">
                <h2>Recent Blog Posts</h2>
                <ul>
                    <?php foreach ($blogs as $blog):?>
                        <?php if ($blog->Published) { ?>

                            <?php $truncate = $this->Text->truncate(
                                $blog->Body,
                                $length=200,
                                array(
                                    'ellipsis' => '...',
                                    'exact' => false
                                )
                            );?>
                            <li>
                                <span class="post-date"><?php echo $blog->Date->format('d-m-Y')?></span>
                                <div>
                                    <?php echo $this->Html->link(
                                        '<h3 class="blog_Title">'. $blog->title.'</h3>',
                                        ['controller'=>'BlogPost','action'=>'view/'.$blog->blog_post_id],
                                        ['escape' => false,'style'=>"padding-bottom: 0px"]
                                    )?>
                                </div>
                                <?php echo $this->Html->link(
                                    '<p>'. $truncate.'</p>',
                                    ['controller'=>'BlogPost','action'=>'view/'.$blog->blog_post_id],
                                    ['escape' => false]
                                )?>
                            </li>
                        <?php } ?>
                    <?php endforeach;?>
                </ul>
                <p><a href="#" class="btn btn-sm btn-special">More Services</a></p>

            </div>
            <!-- END News -->
            <div class="col-md-6 col-md-push-1 gtco-testimonials">
                <h2>Testimonials</h2>
                <?php foreach ($reviews as $review):?>
                    <?php $char = strlen($review->Review_Details)?>
                    <?php if($char <= 250) {?>
                        <blockquote>

                            <p><?php echo $review->Review_Details?></p>
                            <p class="author"><cite><?php echo $review->Client_Name?>, <?php echo $review->Month_Year->format('d-m-Y')?></cite></p>
                        </blockquote>
                    <?php } ?>
                <?php endforeach;?>
                <p><?php echo $this->Html->link('More Testimonials',['controller'=>'Review','action'=>'index'],
                        ['escape' => false, 'class' => 'btn btn-sm btn-special', 'style' => 'position:absolute;'])?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END  -->

</html>

