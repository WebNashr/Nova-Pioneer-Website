<?php

namespace Novapioneer\Admin\Fields;
use Novapioneer\Admin\Settings\Section;
use Novapioneer\Admin\Menu\Page;

class NPSearchField extends SettingsField
{

    public function __construct($name, $label, array $args = null, Page $page = null, Section $section = null)
    {
        $this->id           = isset($args["id"]) ? $args["id"] : "";
        $this->name         = $name;
        $this->value        = isset($args["value"]) ? $args["value"] : "";
        $this->placeholder  = isset($args["placeholder"]) ? $args["placeholder"] : "";
        $this->class        = isset($args["class"]) ? $args["class"] : "";
        $this->label = $label;
        $this->attachToPage($page);
        $this->attachToSection($section);
    }

    public function render()
    {
        echo '<input id="'.$this->id.'" class="'.$this->class.'" type="search" name="'.$this->name.'" value="'.$this->value.'" placeholder="'.$this->placeholder.'"/>';
    }
}