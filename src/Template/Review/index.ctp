<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review[]|\Cake\Collection\CollectionInterface $review
 */
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
    p {
        font-style: italic;
    }

    .box {
        background-color: white;
        -moz-box-shadow: 0 0 3px #ccc;
        -webkit-box-shadow: 0 0 3px #ccc;
        box-shadow: 0 0 3px #ccc;
        padding: 18px;
        border: none;
        outline: none;
        border-bottom-color: #00A0D2;
        border-bottom-style: solid;

    }


    .quotation-mark{
        margin-top: -10px;
        font-weight: bold;
        font-size:100px;
        color:#00A0D2;
        font-family: "Times New Roman", Georgia, Serif;

    }

    .quote-text{
        margin-top: -65px;
        font-style: italic;

    }

    .box client{
        text-transform: capitalize;
        font-style: normal;
    }

</style>
<?php foreach ($webpages as $webpage): ?>
    <?php $name = $webpage -> Webpage;?>
    <?php if ($name === 'Reviews') { ?>
        <?php $heading = $webpage -> Heading; ?>
        <div class="services">
            <div class="container">
                <h3> <?php echo $heading ?> </h3>
            </div>
        </div>
    <?php } ?>
<?php endforeach ?>

<?php foreach ($review as $review): ?>
    <?php
    $theDatetime = h($review['Month_Year']);
    $dt = new DateTime($theDatetime);
    $year  = $dt->format('Y');;
    $monthNum  = $dt->format('n');
    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    $monthName = $dateObj->format('M');
    ?>
<div class="container">

    <blockquote class="box">
        <p class="quotation-mark">
            “
        </p>
        <p class = "quote-text">
        <p>
            <?php echo $review->Review_Details ?>
        </p>
        </p>
        <hr>
        <div class="blog-post-actions">
            <p class="blog-post-bottom pull-left">
            <p><client> <?php echo $review->Client_Name ?>,  <?php echo $review->Suburb ?>, <?php echo $monthName ?> <?php echo $year ?></client></p>
            </p>

        </div>
    </blockquote>
</div>
    <?php endforeach ?>
    <br>
    <br>
    <br>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center pagination-lg" style="margin-left: 35%">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
    </nav>
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
</html>
