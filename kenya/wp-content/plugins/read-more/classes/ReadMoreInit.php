<?php
class ReadMoreInit {

	private $pagesObj;

	function __construct() {

		require_once(YRM_FILES."ReadMoreAdminPost.php");
		require_once(YRM_CLASSES."ReadMoreInstall.php");
		require_once(YRM_CLASSES."ReadMoreIncludeManager.php");
		require_once(YRM_CLASSES."ReadMoreData.php");
		require_once(YRM_CLASSES."ReadMoreFunctions.php");
		require_once(YRM_CSS."ReadMoreStyles.php");
		require_once(YRM_JAVASCRIPT_PATH."javascript.php");
		require_once(YRM_FILES."ReadMoreActions.php");
		require_once(YRM_FILES."RadMoreAjax.php");
		require_once(YRM_CLASSES."ReadMorePages.php");

		$pagesObj =  new ReadMorePages();
		$readMoreData = new ReadMoreData();
		$functionsObj = new ReadMoreFunctions();

		$this->pagesObj = $pagesObj;
		$pagesObj->readMoreDataObj = $readMoreData;
		$pagesObj->functionsObj = $functionsObj;
		$this->actions();
	}

	public function activate() {

		ReadMoreInstall::install();
	}

	public function uninstall() {

		ReadMoreInstall::uninstall();
	}

	public function shortCode() {

		echo YrmConfig::readMoreHeaderScript();
		require_once(YRM_CLASSES."ReadMoreShortCode.php");
		$shortCodeObj = new ReadMoreShortCode();
	}

	public function enqueueScripts() {
		
	}

	public function readMoreMainMenu() {
		
		$this->pagesObj->mainPage();
	}

	public function addNewButton() {

		$this->pagesObj->addNewButtons();
	}

	public function addNewPage() {
		
		$this->pagesObj->addNewPage();
	}

	public function expmAdminMenu() {

		add_menu_page("Read more", "Read more", "manage_options","readMore",array($this, 'readMoreMainMenu'));
		add_submenu_page("readMore","Add New","Add New","manage_options",'addNew', array($this,'addNewPage'));
		add_submenu_page("readMore","Add New button","Add New button","manage_options",'button', array($this,'addNewButton'));
	}

	public function actions() {

		$actions = new ReadMoreActions();
		add_action("admin_menu", array($this, 'expmAdminMenu'));
		add_action('wp_head',  array($this, 'shortCode'));
		add_action('wpmu_new_blog', array($this, 'activate'), 10, 6);
		register_activation_hook(YRM_PATH.YRM_MAIN_FILE,  array($this, 'activate'));
		register_uninstall_hook(YRM_PATH.YRM_MAIN_FILE,  array('ExpMaker', 'uninstall'));
		add_action('admin_post_update_data', array('DataProcessing', 'expanderUpdateData'));
	}
}