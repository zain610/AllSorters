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
                        'type' => 'custname',
                        'class' => 'form-control',
                        'required'=>false,
                        'type' => 'custfname',
                        'pattern' => '[a-zA-Z]+',
                        'title' => 'Names can only contain letters',
                        'formnovalidate' => true
                    ]); ?>
                    <?php if(isset($fnameerror)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $fnameerror ?></p>
                    <?php } ?>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->control('Cust_Sname',[
                        'required'=>false,
                        'label' => false,
                        'type' => 'custsname',
                        'placeholder' => '* Surname',
                        'type' => 'custname',
                        'class' => 'form-control',
                        'pattern' => '[a-zA-Z]+',
                        'title' => 'Names can only contain letters',
                    ]); ?>
                    <?php if(isset($snameerror)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $snameerror?></p>
                    <?php } ?>
                </div>

                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->email('Request_Email',[
                        'label' => false,
                        'placeholder' => 'Email',
                        'required'=>false,
                        'class' => 'form-control'
                    ]); ?>
                    <?php if(isset($emailError)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $emailError?></p>
                    <?php } ?>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->control('Phone',[
                        'label' => false,
                        'type' => 'tel',
                        'placeholder' => 'Phone',
                        'required'=>false,
                        'class' => 'form-control',
                        'pattern' => '^04(\s?[0-9]{2}\s?)([0-9]{3}\s?[0-9]{3}|[0-9]{2}\s?[0-9]{2}\s?[0-9]{2})$',
                        'title' => 'Mobile numbers must start with "04" and be 10 digits in length'
                    ]); ?>
                    <?php if(isset($PhoneError)){ ?>
                    <p style="color: red;font-weight: bold"><?php echo $PhoneError?></p>
                    <?php } ?>
                </div>

                    <div class="col-md-12" style="margin-top: 20px">
                        <?= $this->Form->textarea('Query_info',['label' => false, 'required'=>false,'placeholder' => '* Please enter some messages here', 'class' => 'form-control']); ?>
                    </div>
                <div style="margin-top: 10px">
                <?= $this->Form->button('Submit',['class' => 'btn btn-primary','style' => 'margin-left: 15px']) ?>
                <?= $this->Form->end() ?>
                </div>
            </div>

        </div>
    </div>
</div>



