<?php
Class ReadMoreStyles {

	public function __construct() {
		
	}

	public function registerStyles($hook) {

		wp_register_style('readMoreBootstrap', YRM_CSS_URL.'bootstrap.css');
		wp_register_style('readMoreAdmin', YRM_CSS_URL.'readMoreAdmin.css', array(), '1.0');
	
		if($hook == 'toplevel_page_readMore' || $hook == 'read-more_page_addNew' || $hook == 'read-more_page_button' ) {
			wp_enqueue_style('readMoreAdmin');
			wp_enqueue_style('readMoreBootstrap');
		}
	}

}
