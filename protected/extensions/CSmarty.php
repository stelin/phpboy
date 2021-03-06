<?php
/**
 * 扩展增加smarty模板 
 *
 * @author Hema
 * @link [url]http://www.ttall.net/[/url]
 * @copyright Copyright © 2012-2015  ttall.net
 * @license [url]http://www.ttall.net/license/[/url]
 */
require_once (Yii::getPathOfAlias('application.extensions.smarty') . DIRECTORY_SEPARATOR . 'Smarty.class.php');
define('SMARTY_VIEW_DIR', Yii::getPathOfAlias('application.views'));
class CSmarty extends Smarty {
	const DIR_SEP = DIRECTORY_SEPARATOR;
	function __construct() {
		parent::__construct();
		$this -> template_dir = SMARTY_VIEW_DIR;
		$this -> compile_dir = dirname(__FILE__).'/../runtime/smarty' . self::DIR_SEP . 'template_c';
		$this -> caching = true;
		$this -> cache_dir = dirname(__FILE__).'/../runtime/smarty' . self::DIR_SEP . 'cache';
		$this -> left_delimiter = '<{';
		$this -> right_delimiter = '}>';
		$this -> cache_lifetime = 0;
	}
	function init() {
	}
}