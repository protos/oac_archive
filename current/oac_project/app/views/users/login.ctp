<div class="login">
<h2>Login</h2>    
    <?php 
        echo $session->flash('auth');
        echo $form->create('User', array('action' => 'login'));
        echo $form->input('username');
        echo $form->input('password');
        echo $form->submit('Login');
        echo $form->end();
    ?>
</div> 
