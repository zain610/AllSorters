<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 * @var \App\Model\Entity\PostComment $postComment
 */
?>
<head>
    <title>Blog</title>
</head>

<style>
    .text {
        left: 0;
        color: #f2f2f2;
        position: relative;
        top:0;
        padding: 0px 0px;
        width: 100%;
        text-align: center;
        z-index: 15
        ! important;
    }
</style>
<div class="services">
    <div class="container">
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="well">
                <h1 class="mb-4"><?php echo $blogPost->title?></h1>
                <div class="post-meta">
                    <span class="mr-2" style="font-family: Calibri"><?php echo $blogPost->Date->format('d-m-Y')?></span>
                </div>
                <p><?php echo $blogPost->Description?></p>

                <div class="post-content-body">

                    <div class="row mb-5" style="width: 100%; display: contents">
                        <div>
                            <p><?= $blogPost->Body?></p>
                        </div>
                        <?php foreach ($blogPost->image as $image):?>
                            <div class="col-md-6 mb-4 element-animate" style="display: contents">
                                <?php echo $this->Html->image($image->path,['alt'=> 'Image','class'=>'img-fluid','width' => '80%']);?>
                            </div>
                        <?php endforeach;?>

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            </div>
        </div>
        <hr>

        <?php if(empty($comments) === false) { ?>
            <h3>Comments</h3>
            <?php foreach($comments as $comment){ ?>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <span style="font-weight: bold;color: black"><?php echo $comment['User_Name'] ?>:</span>
                        <span style="color:black;"><?php echo $comment['Comment_Details'] ?></span></li>
                </ul>

                <!--            <hr style="margin: 10px 0rem 10px 0rem;">-->
            <?php } ?>
        <?php } ?>

        <br>
        <br>
        <h4>Leave a Comment</h4>
        <?= $this->Flash->render('comment_sent') ?>
        <?= $this->Form->create($newComment); ?>
        <span>Name (required)</span><?php echo $this->Form->control('User_Name',['label'=>false,'required'=>false,'class'=>'form-control','style'=>'width:50%']) ?>
        <?php if(isset($nameError)){ ?>
            <p style="color: red;margin: 0em 0;"><?php echo $nameError; ?></p>
        <?php } ?>
        <br>
        <apan>Email (required)</apan><?php echo $this->Form->control('User_Email',['type'=>'email','label'=>false,'required'=>false,'class'=>'form-control','style'=>'width:50%']) ?>
        <?php if(isset($emailError)){ ?>
            <p style="color: red;margin: 0em 0;""><?php echo $emailError; ?></p>
        <?php } ?>
        <br>
        <span>Comments (required)</span><?php echo $this->Form->textarea('Comment_Details',['label'=>false,'required'=>false,'class'=>'form-control','style'=>'width:50%']) ?>
        <?php if(isset($commentError)){ ?>
            <p style="color: red;margin: 0em 0;"><?php echo $commentError; ?></p>
        <?php } ?>
        <br>
        <?= $this->Form->button('Submit Comment',['class' => 'btn btn-special']) ?>
        <?= $this->Form->end() ?>


    </div>
    <br>



