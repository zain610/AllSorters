<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
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
        <?= $this->Flash->render(); ?>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <h1 class="mb-4"><?php echo $blogPost->title?></h1>
                <div class="post-meta">
                    <span class="mr-2" style="font-family: Calibri"><?php echo $blogPost->Date?></span>
                </div>
                <div class="post-content-body">
                    <p><?php echo $blogPost->Description?></p>
                    <div class="row mb-5">
                        <?php foreach ($blogPost->image as $image):?>
                        <div class="col-md-6 mb-4 element-animate">
                            <?php echo $this->Html->image($image->path,['alt'=> 'Image','class'=>'img-fluid','width' => '80%']);?>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <a><?php echo $blogPost->Body?></a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <h3>Comments</h3>

        <?php foreach($comment as $comment){ ?>
            <span style="font-weight: bold;color: black"><?php echo $comment['User_Name'] ?>:</span>
            <span style="color:black;"><?php echo $comment['Comment_Details'] ?></span>
            <hr style="margin: 10px 0rem 10px 0rem;">

        <?php } ?>

        <br>
        <br>
        <h4>Leave a replay</h4>

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
        <?= $this->Form->button('Submit Comment',['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>


    </div>
    <br>



