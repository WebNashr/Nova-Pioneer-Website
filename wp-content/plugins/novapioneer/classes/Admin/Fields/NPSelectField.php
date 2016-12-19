<?php

namespace Novapioneer\Admin\Fields;
use Novapioneer\Admin\Settings\Section;
use Novapioneer\Admin\Menu\Page;

class NPSelectField extends SettingsField
{
    private $options;

    private $default_option;

    public function __construct($name, $label, array $options, array $args = null, Page $page = null, Section $section = null)
    {
        $this->id           = isset($args["id"]) ? $args["id"] : "";
        $this->name         = $name;
        $this->class        = isset($args["class"]) ? $args["class"] : "";
        $this->options      = $options;
        $this->default_option = isset($args["default"]) ? $args["default"] : "";
        $this->label = $label;
        $this->attachToPage($page);
        $this->attachToSection($section);
    }

    public function render(array $args)
    {
        extract($args);

        echo '<select id="'.$this->id.'" class="'.$this->class.'" type="text" name="'.$this->name.'">';

        $this->render_options();

        echo '</select>';
    }

    private function render_options()
    {
        $this->refreshValue();

        if( !empty($this->default_option) && empty($this->value) ):

            if( !isset($this->options[$this->default_option]) ):

                echo '<option value="'.strtolower($this->default_option).'" selected>'.ucwords($this->default_option).'</option>';

            endif;

        elseif( empty($this->value) ):
            echo '<option value="" selected>Select Option</option>';
        endif;

        foreach( $this->options as $option ):

            if( empty($this->value) && ( $this->default_option === $option ) ):

                echo '<option value="'.strtolower($option).'" selected>'.ucwords($option).'</option>';

            elseif( !empty($this->value) && ( $this->value == strtolower($option)) ):

                echo '<option value="'.strtolower($option).'" selected>'.ucwords($option).'</option>';

            else:

                echo '<option value="'.strtolower($option).'">'.ucwords($option).'</option>';

            endif;

        endforeach;
    }
}