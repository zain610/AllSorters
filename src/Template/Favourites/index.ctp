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
            border-bottom-color: #00A0D2;
            border-bottom-style: solid;

        }

        .expand-active, .collapsible:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            background-color: #f2f2f2;
        }

        .collapsible:after {
            content: '\02795'; /* Unicode character for "plus" sign (+) */
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
            background-color: #fcfcfc;
            width: 90%;
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
<div class="container">

    <button type="button" class="collapsible"><?php echo $favourites->Title ?></button>
    <div class="content">
        <p>
            <?php echo $favourites->Content ?>
        </p>
    </div>
</div>
    <br>
<?php endforeach ?>


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
