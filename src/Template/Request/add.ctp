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
            <?= $this->Flash->render(); ?>
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

                <div class="row form-group" style="margin-top: 20px">
                    <div class="col-md-12" style="margin-top: 20px">
                        <?= $this->Form->textarea('Query_info',['label' => false, 'required'=>true,'placeholder' => '* Please enter some messages here', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <?= $this->Form->button('Submit',['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<div>
    <br>
    <br>
</div>

