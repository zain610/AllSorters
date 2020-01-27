<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Favourite[]|\Cake\Collection\CollectionInterface $favourites
 */
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .collapsible {
            background-color: white;
            -moz-box-shadow: 0 0 3px #ccc;
            -webkit-box-shadow: 0 0 3px #ccc;
            box-shadow: 0 0 3px #ccc;
            color: #00A0D2;
            cursor: pointer;
            padding: 18px;
            width: 90%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 28px;
            margin-left: 5%;
            margin-right: 5%;
            border-bottom-color: #00A0D2;
            border-bottom-style: solid;

        }

        .expand-active, .collapsible:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            background-color: #f2f2f2;
        }

        .collapsible:after {
            content: '\02795'; /* Unicode character for "plus" sign (+) */
            font-size: 13px;
            color: white;
            float: right;
            margin-left: 5px;
        }

        .expand-active:after {
            content: "\2796"; /* Unicode character for "minus" sign (-) */
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
            margin-left: 5%;
            margin-right: 5%;
            width: 90%;
            font-size: 20px;

        }
        .heading {
            margin-left: 100pt;
        }
    </style>
</head>
<body>

<?php foreach ($webpages as $webpage): ?>
<?php $name = $webpage -> Webpage;?>
<?php if ($name === 'Favourites') { ?>
<?php $heading = $webpage -> Heading; ?>
<div class="services">
    <div class="container">
            <h3> <?php echo $heading ?> </h3>
        </div>
    </div>
    <?php } ?>
    <?php endforeach ?>

<?php foreach ($favourites as $favourites): ?>

    <button type="button" class="collapsible"><?php echo $favourites->Title ?></button>
    <div class="content">
        <p>
            <?php echo $favourites->Content ?>
        </p>
    </div>
    <br>
    <br>
<?php endforeach ?>
<br>
<br>
<br>


<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("expand-active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>

</body>
</html>
