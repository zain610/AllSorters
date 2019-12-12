<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?= $this->Html->css('product.css')?>
<section>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product):?>
            <?php if(!($product->achieved)){ ?>
                    <div class="col-md-4 mt-4">
                        <div class="card profile-card-5">
                            <div class="card-img-block">
                                <?php if($product->Image_id != ''){
                                    echo $this->Html->image($product->image->path,['alt'=>"Card image cap",'width'=>'95%']);
                                }
                                else{ ?>
                                    <img class="card-img-top" src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c" alt="Card image cap">
                                <?php }
                                ?>
                            </div>
                            <div class="card-body pt-0">
                                <h5 class="card-title"><?php echo $product->name?></h5>
                                <p class="card-text"><?php echo $product->description?></p>
                                <p class="card-price">Price: <?php echo $product->price?></p>
                            </div>
                        </div>
                    </div>
            <?php }?>
            <?php endforeach;?>
        </div>
    </div>
</section>
