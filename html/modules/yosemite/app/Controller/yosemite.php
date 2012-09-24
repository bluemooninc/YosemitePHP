<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bluemooninc
 * Date: 12/09/14
 * Time: 15:50
 * To change this template use File | Settings | File Templates.
 */

if (!defined('XOOPS_ROOT_PATH')) exit();
require_once _MY_MODULE_PATH . 'app/View/view.php';         // loading view common file
require_once _MY_MODULE_PATH . 'app/View/yosemite.php';     // loading view this file

class Controller_Yosemite extends AbstractAction
{
	var $template = "yosemite_index.html";                  // Template file
	private static $testObject;                             // Database instance
	private static $actionForm;                             // Form instance

	public function action_index()
	{
		$testHandler =& xoops_getmodulehandler('test');     // Generate Model instance
		$this->actionForm = new Yosemite_EditForm();        // Generate Form instance
		$uid = $this->root->mContext->mXoopsUser->uid();    // Get User ID
		$this->testObject = $testHandler->getTest( $uid );  // Get User data or add new record
		$this->actionForm->load($this->testObject);         // Set Form structure from record data
	}
	public function action_view(){
		$view = new View( $this->root );                    // Generate View instance
		$view->setTemplate( $this->template );              // Set template file
		$view->set( 'actionForm', $this->actionForm );      // Set View structure from the form structure
	}
}