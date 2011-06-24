<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('OAC Archive Website - '); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css('cake.generic');
		echo($javascript->link("jquery.js"));
		echo($javascript->link("oac.js")); 
		echo($html->css("oac.css"));

		echo $scripts_for_layout;
	?>
</head>
<body>
    
	<div id="container">
	
            <div id="header">
		<?php
                    echo $html->link(
                	$html->image('title.gif', array('alt'=> __("OaC Archive Application", true), 'border'=>"0")),
			'http://www.oac.ie/',
			array('target'=>'_blank'), null, false
                    );
		?>
            </div>
            <div id="content">
                <?php 
                    $session->flash();
                    
                    if ($user['User']['username']) {
                        echo "<br/>Logged in as <b>" . $user['User']['full_name'] .
                            "</b>&nbsp;&nbsp;&nbsp;&nbsp;" . 
                            $html->link('Logout', array('controller' => 'Users', 'action' => 'logout')) .
                            "&nbsp;&nbsp;|&nbsp;&nbsp;" .
                            $html->link('Main Menu', array('controller' => 'Dashboard', 'action' => 'index'));
                    }
                    echo $content_for_layout; 
                ?>
            </div>
                <div id="footer"></div>

        </div>
	<?php echo $cakeDebug; ?>
</body>
</html>
