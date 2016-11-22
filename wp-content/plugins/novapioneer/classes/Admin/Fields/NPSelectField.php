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
        $this->value        = isset($args["value"]) ? $args["value"] : "";
        $this->placeholder  = isset($args["placeholder"]) ? $args["placeholder"] : "";
        $this->class        = isset($args["class"]) ? $args["class"] : "";
        $this->options      = $options;
        $this->default_option = isset($args["default"]) ? $args["default"] : "";
        $this->label = $label;
        $this->attachToPage($page);
        $this->attachToSection($section);
    }

    public function render()
    {
        echo '<select id="'.$this->id.'" class="'.$this->class.'" type="text" name="'.$this->name.'" value="'.$this->value.'" placeholder="'.$this->placeholder.'">';

        $this->render_options();

        echo '</select>';
    }

    private function render_options()
    {
        if( !empty($this->default_option) ):

            if( !isset($this->options[$this->default_option]) ):

                echo '<option value="'.strtolower($this->default_option).'" selected>'.ucwords($this->default_option).'</option>';

            endif;
        else:
            echo '<option value="" selected>Select Option</option>';
        endif;

        foreach( $this->options as $option ):

            if($this->default_option === $option):

                echo '<option value="'.strtolower($option).'" selected>'.ucwords($option).'</option>';

            else:

                echo '<option value="'.strtolower($option).'">'.ucwords($option).'</option>';

            endif;

        endforeach;
    }
}