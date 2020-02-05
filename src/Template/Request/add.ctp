<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?>
<div class="services">
    <div class="container">
        <h3>Contact us</h3>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container" style="margin-top: -100px">
    <div class="row">
        <div class="col-md-6 animate-box" >
            <?= $this->Flash->render('error'); ?>
            <?= $this->Flash->render('success'); ?>
            <p>Fields marked * are required</p>
            <br>
            <br>
            <?= $this->Form->create($request) ?>
            <div class="row form-group" style="margin-top: -40px">
                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->control('Cust_Fname',[
                        'label' => false,
                        'placeholder' => '* Firstname',
                        'class' => 'form-control',
                        'required'=>false,
                        'type' => 'custfname',
                        'pattern' => "[\s+[a-zA-Z]+",
                        'title' => 'Names can only contain letters',
                        'formnovalidate' => true
                    ]); ?>
                    <?php if(isset($fnameerror)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $fnameerror ?></p>
                    <?php } ?>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->control('Cust_Sname',[
                        'pattern' => "[\s+[a-zA-Z]+",
                        'required'=>false,
                        'label' => false,
                        'type' => 'custsname',
                        'placeholder' => '* Surname',
                        'class' => 'form-control',
                        'title' => 'Names can only contain letters',
                    ]); ?>
                    <?php if(isset($snameerror)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $snameerror?></p>
                    <?php } ?>
                </div>

                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->email('Request_Email',[
                        'pattern' => '^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$',
                        'label' => false,
                        'placeholder' => 'Email',
                        'required'=>false,
                        'class' => 'form-control',
                        'title' => 'Please enter a valid Email Address.'
                    ]); ?>
                    <?php if(isset($emailError)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $emailError?></p>
                    <?php } ?>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->control('Phone',[
                        'pattern' => '^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$',
                        'label' => false,
                        'type' => 'tel',
                        'placeholder' => 'Phone',
                        'required'=>false,
                        'class' => 'form-control',
                        'title' => 'Please enter a valid Phone number.'
                    ]); ?>
                    <?php if(isset($PhoneError)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $PhoneError?></p>
                    <?php } ?>
                </div>

                    <div class="col-md-12" style="margin-top: 20px">
                        <?= $this->Form->textarea('Query_info',['label' => false, 'required'=>false,'placeholder' => '* Please enter some messages here', 'class' => 'form-control']); ?>
                    </div>
                <div style="margin-top: 10px">
                <?= $this->Form->button('Submit',['class' => 'btn btn-sm btn-special','style' => 'margin-left: 15px; color: #ffffffd9 !important']) ?>
                <?= $this->Form->end() ?>
                </div>
            </div>

        </div>
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


