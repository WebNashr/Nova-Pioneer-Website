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

    const TEMPLATE_DIR = 'templates';
    const CACHE_DIR = 'cache/twig';

    /**
     * The path to look for templates.
     *
     * @const      TEMPLATE_PATH
     */
    const TEMPLATE_PATH = NOVAP_THEME_PATH . self::TEMPLATE_DIR;

    /**
     * The path to cache compiled templates.
     *
     * @const      CACHE_PATH
     */
    const CACHE_PATH = NOVAP_THEME_PATH . self::CACHE_DIR;

    /**
     * Initialize twig and load template.
     */
    public function __construct($template_name)
    {

        Twig_Autoloader::register();

        $this->twig_loader = new Twig_Loader_Filesystem(self::TEMPLATE_PATH);

        $this->twig = new Twig_Environment($this->twig_loader, array(
            'cache' => self::CACHE_PATH,
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