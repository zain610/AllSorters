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
        font-family: roboto slab;
        font-size: 25px;
        font-style: italic;
    }

    .box {
        background-color: white;
        -moz-box-shadow: 0 0 3px #ccc;
        -webkit-box-shadow: 0 0 3px #ccc;
        box-shadow: 0 0 3px #ccc;
        padding: 18px;
        width: 80%;
        border: none;
        outline: none;
        margin-left: 5%;
        margin-right: 5%;
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
        font-size: 10px;
        margin-top: -65px;
        font-style: italic;

    }

    .box client{
        font-family: 'Roboto Slab';
        font-size: 22px;
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
</html>
