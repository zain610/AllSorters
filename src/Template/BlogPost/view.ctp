<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>

<html>

<head>
    <title>Blog</title>
</head>
<body>
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
        <div class="row">
            <div class="col-md-12 col-lg-8 mb-5">
                <h3>Blog</h3>

                <div class="well">
                    <h4><?php echo $blogPost->title?></h4>
                    <p><?php echo $blogPost->Description?></p>
                    <a><?php echo $blogPost->Body?></a>
                </div>
                <div class="related">
                    <?php if (!empty($blogPost->image)): ?>
                        <table cellpadding="0" cellspacing="0">
                            <tbody>
                            <?php foreach ($blogPost->image as $image): ?>
                                <tr>
                                    <td class="card" width="50%">
                                        <?php echo $this->Html->image($image->path, ['alt' => 'CakePHP']); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
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

    <!-- footer -->
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>
</body>
</html>

