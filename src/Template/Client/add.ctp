<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<body>
<div class="services">
    <div class="container">
        <div class="row">
            <h3>Contact Us</h3>
        <div class="col-md-6 animate-box">
            <?= $this->Flash->render(); ?>
            <p>Fields marked * are required</p>
            <br>
            <br>
            <?= $this->Form->create($client) ?>
            <div class="row form-group">
                <div class="col-md-6">
                    <?php echo $this->Form->control('fname',[
                        'label' => false,
                        'placeholder' => '* Firstname',
                        'class' => 'form-control',
                        'required'=>true,
                        'pattern' => '[a-zA-Z]+',
                        'title' => 'Names can only contain letters'
                    ]); ?>
                </div>
                <div class="col-md-6">
                    <?php echo $this->Form->control('sname',[
                        'required'=>true,
                        'label' => false,
                        'placeholder' => '* Surname',
                        'class' => 'form-control',
                        'pattern' => '[a-zA-Z]+',
                        'title' => 'Names can only contain letters'
                    ]); ?>
                </div>


                <div class="col-md-12">
                    <p style="margin-top:20px">Date of Birth</p>
                    <?php echo $this->Form->control('DOB',[
                        'required'=>true,'label'=>false,
                        'class' => 'form-control','style'=>'margin-top:0px'
                    ]); ?>
                </div>

                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->control('Address',[
                        'label' => false,
                        'placeholder' => 'Address',
                        'required'=>false,
                        'class' => 'form-control'
                    ]); ?>
                </div>

                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->control('Phone',[
                        'label' => false,
                        'placeholder' => 'Phone',
                        'required'=>false,
                        'class' => 'form-control',
                        'pattern' => '^04(\s?[0-9]{2}\s?)([0-9]{3}\s?[0-9]{3}|[0-9]{2}\s?[0-9]{2}\s?[0-9]{2})$',
                        'title' => 'Mobile numbers must start with "04" and be 10 digits in length'
                    ]); ?>
                </div>
                <br>
                <div class="col-md-6" style="margin-top: 20px">
                    <?php echo $this->Form->email('Email',[
                        'label' => false,
                        'placeholder' => 'Email',
                        'required'=>false,
                        'class' => 'form-control'
                    ]); ?>
                </div>

                <div class="row form-group" style="margin-top: 20px">
                    <div class="col-md-12" style="margin-top: 20px">
                        <?= $this->Form->textarea('messages',['label' => false, 'required'=>true,'placeholder' => '* Please enter some messages here', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <?= $this->Form->button('Submit',['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>

</div>
</div>
</div>
</body>
