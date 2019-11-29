<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Request $request
 */
?><br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6 animate-box">
            <?= $this->Flash->render('error'); ?>
            <?= $this->Flash->render('success'); ?>
            <h3>Contact us</h3>
            <p>Fields marked * are required</p>
            <br>
            <br>
            <?= $this->Form->create($request) ?>
            <div class="row form-group">
                <div class="col-md-6">
                    <?php echo $this->Form->control('Cust_Fname',[
                        'label' => false,
                        'placeholder' => '* Firstname',
                        'type' => 'custname',
                        'class' => 'form-control',
                        'required'=>true,
                        'pattern' => '[a-zA-Z]+',
                        'title' => 'Names can only contain letters'
                    ]); ?>
                </div>
                <div class="col-md-6">
                    <?php echo $this->Form->control('Cust_Sname',[
                        'required'=>true,
                        'label' => false,
                        'placeholder' => '* Surname',
                        'type' => 'custname',
                        'class' => 'form-control',
                        'pattern' => '[a-zA-Z]+',
                        'title' => 'Names can only contain letters'
                    ]); ?>
                </div>
                <br>
                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->email('Request_Email',[
                        'label' => false,
                        'placeholder' => 'Email',
                        'required'=>false,
                        'class' => 'form-control'
                    ]); ?>
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
                </div>
                <div class="row form-group" style="margin-top: 20px">
                    <div class="col-md-12" style="margin-left: 15px; margin-top: 20px">
                        <?= $this->Form->textarea('Query_info',['label' => false, 'required'=>true,'placeholder' => '* Please enter some messages here', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <?= $this->Form->button('Submit',['class' => 'btn btn-primary','style' => 'margin-left: 15px']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>



