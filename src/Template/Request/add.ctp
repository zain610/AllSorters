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

<!-- footer -->
<div class="footer" id="contact">
    <div class="container">
        <div class="col-md-4 contact-left">
            <h3>Address</h3>
            <address>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">P :</abbr> (123) 456-7890
            </address>
        </div>
        <div class="col-md-4 ftr-gd">
            <h3>Follow Us</h3>
            <ul class="social">
                <li><a href="#"><i></i></a> </li>
                <li><a href="#"><i class="facebook"></i></a></li>
                <li><a href="#"><i class="goog"></i> </a></li>
                <li><a href="#"><i class="lin"></i> </a></li>
            </ul>
        </div>
        <div class="col-md-4 contact-left">
            <h3>Phone/Fax</h3>
            <p>Phone : +1234567890 </p>
            <p>Fax : +1234567890 </p>
            <p>Email : <a href="mailto:info@example.com">info@mycompany.com</a> </p>
        </div>
        <div class="clearfix"></div>
        <div class="copyright">
            <p>Copyright &copy; 2015.Company name All rights reserved.</p>
        </div>
    </div>
</div>

<!-- footer -->
