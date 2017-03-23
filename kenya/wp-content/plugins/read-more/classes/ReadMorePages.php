<?php
Class ReadMorePages {

	public $functionsObj;
	public $readMoreDataObj;

	public function __construct() {
		
	}

	public function mainPage() {

		require_once(YRM_VIEWS."readMorePagesView.php");
	}

	public function addNewPage() {

		require_once(YRM_VIEWS."readMoreAddNew.php");
	}

	public function addNewButtons() {

		$id = @$_GET['readMoreId'];
		$dataObj = $this->readMoreDataObj;
		$dataObj->setId($id);
		$buttonWidth = $dataObj->getOptionValue('button-width');
		$buttonHeight = $dataObj->getOptionValue('button-height');
		$fontSize = $dataObj->getOptionValue('font-size');
		$animationDuration = $dataObj->getOptionValue('animation-duration');
		$btnBackgroundColor = $dataObj->getOptionValue('btn-background-color');
		$btnTextColor = $dataObj->getOptionValue('btn-text-color');
		$expanderFontFamily = $dataObj->getOptionValue('expander-font-family');
		$btnBorderRadius = $dataObj->getOptionValue('btn-border-radius');
		$horizontal = $dataObj->getOptionValue('horizontal');
		$vertical = $dataObj->getOptionValue('vertical');
		$showOnlyMobile = $dataObj->getOptionValue('show-only-mobile', true);

		$readMoreTitle = $dataObj->getOptionValue('expm-title');

		$dataParams = $dataObj->getOptionsData();
		$functions = $this->functionsObj;
		require_once(YRM_VIEWS."readMoreAddNewButton.php");
	}
}