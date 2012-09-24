<?php
/**
 * @license http://www.gnu.org/licenses/gpl.txt GNU GENERAL PUBLIC LICENSE Version 3
 * @author Marijuana
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

class YosemiteTestObject extends XoopsSimpleObject
{

	public function __construct()
	{
		$this->initVar('id', XOBJ_DTYPE_INT, 0, TRUE);
		$this->initVar('uid', XOBJ_DTYPE_INT, 0, TRUE);
		$this->initVar('title', XOBJ_DTYPE_STRING, NULL, FALSE, 255);
		$this->initVar('content', XOBJ_DTYPE_TEXT);
	}

}

class YosemiteTestHandler extends XoopsObjectGenericHandler
{
	public $mTable = 'yosemite_test';
	public $mPrimary = 'id';
	public $mClass = 'yosemiteTestObject';
	public static $moduleHandler;
	public static $moduleObject;

	public function getCount($uid)
	{
		$criteria = new CriteriaCompo(new Criteria('uid', $uid));
		return $this->getCount($criteria);
	}

	public function insert(&$obj, $force = false)
	{
		parent::insert($obj, $force);
	}

	public function addNew($uid)
	{
		$this->moduleObject = $this->create();
		$this->moduleObject->set('uid', $uid);
		parent::insert($this->moduleObject, true);
	}

	public function getTest($uid)
	{
		$mCriteria = new CriteriaCompo();
		$mCriteria->add(new Criteria('uid', $uid));
		$mCriteria->addSort('id', 'DESC');
		$Objects = $this->getObjects($mCriteria);

		if (!$Objects) {
			self::addNew($uid); // Create when no record
		} else {
			$this->moduleObject = $Objects[0];
		}
		return $this->moduleObject;
	}

}
