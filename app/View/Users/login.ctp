<div class="index">
    <?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('User', array('action'=>'login'));
    echo $this->Form->input('user_no',array('label'=>'User ID'));
    echo $this->Form->input('password');
    echo $this->Form->end('Login');
    ?>
</div>