<?php
class UsersController extends AppController
{
    var $name = "Users";
        
    function beforeFilter() {
        parent::beforeFilter();
    }
    
    function login() {
    }
    
    function logout() {
        $this->redirect($this->Auth->logout());
    }
}
?>