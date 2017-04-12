<?php

namespace NovaPioneer;

require_once NOVAP_THEME_PATH . 'vendor/twig/twig/lib/Twig/Autoloader.php';

use Twig_Autoloader;
use Twig_Loader_Filesystem;
use Twig_Environment;

/**
 * Store information for a view and render it when called to.
 *
 * @package    NovaPioneer
 * @author     Circle Digital Team
 */
class View
{
    /**
     * The template loader.
     *
     * @access   private
     * @var      Twig_Loader_Filesystem $twig_loader
     */
    private $twig_loader;

    /**
     * The twig instance.
     *
     * @access   private
     * @var      Twig_Environment $twig_loader
     */
    private $twig;

    /**
     * The twig template.
     *
     * @access   private
     * @var      Twig_Template $template
     */
    private $template;

    /**
     * The path to look for templates.
     *
     * @const      TEMPLATE_PATH
     */
    private $TEMPLATE_PATH;

    /**
     * The path to cache compiled templates.
     *
     * @const      CACHE_PATH
     */
    private $CACHE_PATH;

    /**
     * Initialize twig and load template.
     */
    public function __construct($template_name)
    {
        $this->TEMPLATE_PATH = NOVAP_THEME_PATH . 'templates';
        $this->CACHE_PATH = NOVAP_THEME_PATH . 'cache/twig';

        Twig_Autoloader::register();

        $this->twig_loader = new Twig_Loader_Filesystem($this->TEMPLATE_PATH);

        $this->twig = new Twig_Environment($this->twig_loader, array(
            'cache' => $this->CACHE_PATH,
            'debug' => defined('WP_DEBUG') ? WP_DEBUG : false
        ));

        $this->load_template($template_name); // TODO: check if template file actually exists and throw an error if it doesn't
    }

    /**
     * Renders the template.
     */
    public function render(array $vars, $should_echo = true)
    {
        if ($should_echo) {
            echo $this->template->render($vars);
        } else {
            return $this->template->render($vars);
        }

    }

    /**
     * Loads the template.
     */
    private function load_template($template_name)
    {
        $this->template = $this->twig->loadTemplate($template_name);
    }


}