<?php
class User extends AppModel
{
    var $name = 'User';
    
    function validateLogin($data)
    {
        $user = $this->find(array('username' => $data['username'],
                                  'password' => md5($data['password'])),
            array('id', 'username'));

        $user['User']['full_name'] = $data['full_name'];

        if(empty($user) == false) {
            return $user['User'];
        }
        
        return false;
    } 
}
?>
