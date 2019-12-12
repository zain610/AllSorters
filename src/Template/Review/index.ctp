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


    .quote-box{

        overflow: hidden;
        margin-top: -50px;
        padding-top: -100px;
        border-radius: 17px;
        background-color:   grey;
        margin-top: 25px;
        color:black;
        width: 80%;
        box-shadow: 2px 2px 2px 2px #E0E0E0;

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
    .box details{
        font-style: italic;
        font-family: 'Roboto Slab';
        font-size: 22px;
    }

    .box client{
        font-family: 'Roboto Slab';
        font-size: 22px;
    }
</style>
<div class="services">
    <div class="container">
        <h3>Client Feedback</h3>
    </div>
</div>


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
        <p class="quote-text">
            <details> <?php echo $review->Review_Details ?> </details>
        </p>
        <hr>
        <div class="blog-post-actions">
            <p class="blog-post-bottom pull-left">
            <p><client> <?php echo $review->Client_Name ?>,  <?php echo $review->Suburb ?>, <?php echo $monthName ?> <?php echo $year ?></client></p>
            </p>

        </div>
    </blockquote>

<?php endforeach ?>
</html>
