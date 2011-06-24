<?php
class AppController extends Controller {

    var $components =array('Auth');    
    var $helpers = array('Html', 'Form', 'Javascript');

    function beforeRender() {
        $this->set('user', $this->Auth->user());
    }

    function beforeFilter() {
	Security::setHash('md5');
		
	// Authenticate
	$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
	$this->Auth->loginRedirect = array('controller' => 'dashboard', 'action' => 'index');
	$this->Auth->loginError = 'No username and password was found with that combination.';
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');        
    }
} 
?>
