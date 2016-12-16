<?php 

namespace Novapioneer\Admin\Menu;

/**
 * An Options Sub Page.
 *
 * @package    Tote
 * @author     Circle Digital <developers@circle.co.ke>
 */
class SubPage extends Page
{
	/**
	 * The slug name for the parent menu (or the file name of a standard WordPress admin page).
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      string    $parent_slug
	 */
    protected $parent_slug;

	/**
	 * Load attributes and register menu page.
	 * @since    0.0.1
	 */
    public function __construct($template_name, array $attrs, $vars = array())
    {
        parent::__construct($template_name, $attrs, $vars);
    }

	/**
	 * Register the menu with Wordpress.
     * @override 
	 * @since    0.0.1
	 */
    protected function register() {

        add_submenu_page(
            $this->parent_slug,
            $this->page_title, 
            $this->menu_title, 
            $this->capability, 
            $this->menu_slug, 
            array($this, 'render')
        );
    }

    
}