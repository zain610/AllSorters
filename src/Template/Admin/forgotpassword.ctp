<div class="row">
    <div class = 'col-mid-4 offset-md-4'>
        <?php echo $this->Flash->render() ?>
        <div class="card">
            <h3 class="card-header">Forgot Password</h3>
            <div class="card-body">
                <?php echo $this->Form->create(); ?>
                <div class = 'form-group'>
                    <?php echo $this->Form->input('email',['class'=>'form-control']) ?>
                </div>
                <?php
                echo $this->Form->button('Get New Password',['class'=>'btn btn-primary']);
                echo $this->Html->link('login',['action'=>'login'],['class'=>'btn btn-success']);
                echo $this->Form->end();
                ?>
            </div>
        </div>

    </div>

</div>
