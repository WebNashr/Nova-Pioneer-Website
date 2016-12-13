<?php

namespace Novapioneer\Admin\Menu;


/**
 * An Options Page.
 *
 * @package    Novapioneer
 * @author     Circle Digital <developers@circle.co.ke>
 */
class Page {

	/**
	 * The text to be displayed in the title tags of the page when the menu is selected.
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      string    $page_title
	 */
    protected $page_title;

	/**
	 * The text to be used for the menu.
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      string    $menu_title
	 */
    protected $menu_title;

	/**
	 * The capability required for this menu to be displayed to the user.
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      string    $capability
	 */
    protected $capability;

	/**
	 * The slug name to refer to this menu by.
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      string    $menu_slug
	 */
    protected $menu_slug;

	/**
	 * The URL to the icon to be used for this menu. 
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $icon_url
	 */
    private $icon_url;

	/**
	 * The position in the menu order where this page should appear.
	 *
	 * @since    0.0.1
	 * @access   private
	 * @var      string    $position
	 */
    private $position;

	/**
	 * The name of the page template.
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      string    $template_name
	 */
    protected $template_name;

	/**
	 * The array of variables to pass to the view.
	 *
	 * @since    0.0.1
	 * @access   protected
	 * @var      array $view_vars
	 */
	protected $view_vars;

	/**
	 * Load attributes and register menu page.
	 * @since    0.0.1
	 */
    public function __construct($template_name, array $attrs, $vars = array()) {

        $this->template_name = $template_name;
		$this->view_vars = $vars;
        $this->load_attrs($attrs);
        $this->register();

    }

	/**
	 * Load the page attributes.
	 * @since    0.0.1
	 */
    protected function load_attrs(array $attrs) {

        foreach($attrs as $key => $value)
        {
            if( property_exists( static::class, $key) )
            {
                $this->$key = $value;
            }
        }
        
    }

	/**
	 * Register the menu with Wordpress.
	 * @since    0.0.1
	 */
    protected function register() {

        add_menu_page(
            $this->page_title, 
            $this->menu_title, 
            $this->capability, 
            $this->menu_slug, 
            array($this, 'render'), 
            $this->icon_url, 
            $this->position
        );
    }

	/**
	 * Render the menu item's page.
	 * @since    0.0.1
	 */
    public function render()
    {
		extract($this->view_vars);

		$page_slug = $this->getSlug();
		
        require_once NOVAP_PLUGIN_PATH . "templates/" . $this->template_name;
    }

	/**
	 * Get the menu_slug
	 * @since 0.0.1
	 */
	public function getSlug()
	{
		return $this->menu_slug;
	}

}