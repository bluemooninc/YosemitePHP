<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bluemooninc
 * Date: 12/09/20
 * Time: 13:36
 * To change this template use File | Settings | File Templates.
 */
// Get input data core class
require_once XOOPS_ROOT_PATH . "/core/XCube_ActionForm.class.php";
// Validation parent class
require_once XOOPS_MODULE_PATH . "/legacy/class/Legacy_Validator.class.php";
class Form_Yosemite extends XCube_ActionForm
{
	public function __construct()
	{
		parent::XCube_ActionForm();
		$this->prepare(); // Create Form objects
	}

	public function &forge()
	{
		static $instance;
		if (!isset($instance)) {
			$instance = new Form_Yosemite();
		}
		return $instance;
	}
	public function getTokenName()
	{
		return 'module.yosemite.EditForm.TOKEN';
	}
	public function prepare()
	{

		// Set field data type
		$this->mFormProperties['uid'] = new XCube_IntProperty('uid');
		$this->mFormProperties['title'] = new XCube_StringProperty('title');
		$this->mFormProperties['content'] = new XCube_TextProperty('content');
		// Set field data validation
		$this->mFieldProperties['title'] = new XCube_FieldProperty($this);
		$this->mFieldProperties['title']->setDependsByArray(array('required', 'maxlength'));
		$this->mFieldProperties['title']->addMessage('required', _MD_YOSEMITE_ERROR_REQUIRED, _MD_YOSEMITE_LANG_TITLE);
		$this->mFieldProperties['title']->addMessage('maxlength', _MD_YOSEMITE_ERROR_MAXLENGTH);
		$this->mFieldProperties['title']->addVar('maxlength', '30');
	}

	public function load($object)
	{
		foreach ($object as $myrow) {
			if (is_array($myrow)) {
				foreach ($myrow as $key => $val) {
					$this->set($key, $val['value']);
				}
			}
		}
	}

	function update(&$obj,$uid)
	{
		foreach($this->mFormProperties as $key=>$val)
		{
			$obj->set($key, $this->get($key));
		}
		$this->set("uid", $uid);
	}
}
