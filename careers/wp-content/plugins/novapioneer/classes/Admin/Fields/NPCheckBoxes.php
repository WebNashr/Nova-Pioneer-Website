<?php

namespace Novapioneer\Admin\Fields;
use Novapioneer\Admin\Settings\Section;
use Novapioneer\Admin\Menu\Page;

class NPCheckBoxes extends SettingsField
{
    private $options;

    private $default_option;

    public function __construct($name, $label, array $options, array $args = null, Page $page = null, Section $section = null)
    {
        $this->id           = isset($args["id"]) ? $args["id"] : "";
        $this->name         = $name;
        $this->class        = isset($args["class"]) ? $args["class"] : "";
        $this->options      = $options;
        $this->default_options = isset($args["default"]) ? $args["default"] : array();
        $this->label = $label;
        $this->attachToPage($page);
        $this->attachToSection($section);
    }

    public function render(array $args)
    {
        extract($args);
        
        echo '<div id="'.$this->id.'" class="'.$this->class.'" >';

        $this->render_options();

        echo '</div>';
    }

    private function render_options()
    {
        $this->refreshValue();

        // TODO: populate values from db. This is gonna be a little complex for this field.
        // TODO: only check default values if the current value for this field in the db is null or empty

        foreach( $this->options as $option ):

            if( is_array($this->default_options) && isset($this->default_options[$option]) ):

                echo '<input id="'.$this->name.'" type="checkbox" value="'.strtolower($option).'" checked />';
                echo '<label for="'.$this->name.'" >';
                echo ucwords($option);
                echo '</label>';

            else:

                echo '<input id="'.$this->name.'" type="checkbox" value="'.strtolower($option).'" />';
                echo '<label for="'.$this->name.'" >';
                echo ucwords($option);
                echo '</label>';

            endif;

        endforeach;
    }
}