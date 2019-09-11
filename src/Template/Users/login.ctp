
<div>
    <?= $this->Form->create(null,[
        'url' => [
            'controller' => 'users',
            'action' => 'login'
        ]
    ]); ?>
    <?= $this->Flash->render(); ?>
    <fieldset>
        <?= $this->Form->control('username'); ?>
        <?= $this->Form->control('password', array('type' => 'password')); ?>
    </fieldset>

    <?= $this->Form->button('Login'); ?>
    <?= $this->Form->end(); ?>
</div>
