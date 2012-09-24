<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bluemooninc
 * Date: 12/09/14
 * Time: 15:50
 * To change this template use File | Settings | File Templates.
 */

if (!defined('XOOPS_ROOT_PATH')) exit();
require_once _MY_MODULE_PATH . 'app/View/view.php';
require_once _MY_MODULE_PATH . 'app/View/yosemite.php';

class Controller_Edit extends AbstractAction
{
	var $template = "yosemite_edit.html";
	private static $testObject;
	private static $actionForm;

	public function action_index()
	{
		$testHandler =& xoops_getmodulehandler('test');         // Generate Model instance
		$this->actionForm = new Yosemite_EditForm();                 // Generate Form instance
		$uid = $this->root->mContext->mXoopsUser->uid();        // Get User ID
		$this->testObject = $testHandler->getTest( $uid );      // Get User data or Make recored
		$this->actionForm->load($this->testObject);             // Record to Form structure
		if(xoops_getenv("REQUEST_METHOD")=="POST"){             // Check '$_POST'
			$this->actionForm->fetch();                         // Check form data
			$this->actionForm->validate();                      // Get form data
			if ($this->actionForm->hasError()) {
				$this->setErr($this->actionForm->getErrorMessages());
			} else {
				$this->actionForm->update($this->testObject,$uid);
				$testHandler->insert($this->testObject);
			}
		}
	}
	public function action_view(){
		$view = new View( $this->root );                        // Generate instance
		$view->setTemplate( $this->template );                  // Set Template
		$view->set( 'actionForm', $this->actionForm );          // Set View from Form structure
		if ($this->isError){
			$view->set( 'errorMessage', $this->errMsg );
		}
	}
}