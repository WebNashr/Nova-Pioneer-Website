<?php
class YrmConfig {

	public function __construct() {

		$this->init();
	}

	public function getDirectoryName() {

		$baseName = plugin_basename( __FILE__ );
		$readMoreDirectoryName =explode('/', $baseName);

		if(isset($readMoreDirectoryName[0])) {
			return $readMoreDirectoryName[0];
		}
		else {
			return '';
		}
	}
	private function init() {

		if (!defined('ABSPATH')) {
			exit();
		}

		$readMoreDirectoryName = $this->getDirectoryName();

		if(!defined('YRM_PLUGIN_PREFIX')) {
			define("YRM_PLUGIN_PREFIX", $readMoreDirectoryName);
		}

		if(!defined('YRM_MAIN_FILE')) {
			define("YRM_MAIN_FILE", $readMoreDirectoryName.'.php');
		}

		if(!defined('YRM_PATH')) {
			define("YRM_PATH", dirname(__FILE__).'/');
		}

		if(!defined('YRM_CLASSES')) {
			define("YRM_CLASSES", YRM_PATH.'classes/');
		}

		if(!defined('YRM_FILES')) {
			define("YRM_FILES", YRM_PATH.'files/');
		}

		if(!defined('YRM_CSS')) {
			define("YRM_CSS", YRM_PATH.'css/');
		}

		if(!defined('YRM_VIEWS')) {
			define("YRM_VIEWS", YRM_PATH.'views/');
		}

		if(!defined('YRM_JAVASCRIPT_PATH')) {
			define("YRM_JAVASCRIPT_PATH", YRM_PATH.'js/');
		}

		if(!defined('YRM_URL')) {
			define("YRM_URL", plugins_url('', __FILE__).'/');
		}

		if(!defined('YRM_JAVASCRIPT')) {
			define("YRM_JAVASCRIPT", YRM_URL.'js/');
		}

		if(!defined('YRM_CSS_URL')) {
			define("YRM_CSS_URL", YRM_URL.'css/');
		}

		if(!defined('YRM_LANG')) {
			define("YRM_LANG", 'yrm_lang');
		}

		if(!defined('YRM_VERSION')) {
			define("YRM_VERSION", 1.02);
		}

		if(!defined('YRM_PRO_VERSION')) {
			define("YRM_PRO_VERSION", 1.01);
		}

		if(!defined('YRM_PKG')) {
			define("YRM_PKG", 1);
		}

		if(!defined('YRM_PRO_URL')) {
			define("YRM_PRO_URL", 'http://code-guard.esy.es/wodpress-read-more/');
		}
	}

	public static function readMoreHeaderScript() {
		
		/*Version comment*/
		$headerScript = "YRM_VERSION=".YRM_VERSION;
		if(YRM_PKG > 1) {
			$headerScript = "YRM_PRO_VERSION=".YRM_PRO_VERSION;
		}

		return "<script type=\"text/javascript\">
			$headerScript
		</script>";
	}
}

$configInit = new YrmConfig();