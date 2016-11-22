<?php

namespace Novapioneer\Admin\Fields;
use Novapioneer\Admin\Settings\Section;
use Novapioneer\Admin\Menu\Page;

class NPTextAreaField extends SettingsField
{
    private $rows;

    private $cols;

    public function __construct($name, $label, array $args = null, Page $page, Section $section)
    {
        $this->id           = isset($args["id"]) ? $args["id"] : "";
        $this->name         = $name;
        $this->value        = isset($args["value"]) ? $args["value"] : "";
        $this->placeholder  = isset($args["placeholder"]) ? $args["placeholder"] : "";
        $this->class        = isset($args["class"]) ? $args["class"] : "";
        $this->rows        = isset($args["rows"]) ? $args["rows"] : "320";
        $this->cols        = isset($args["cols"]) ? $args["cols"] : "180";
        $this->label = $label;
        $this->attachToPage($page);
        $this->attachToSection($section);
    }

    public function render()
    {
        echo '<textarea id="'.$this->id.'" class="'.$this->class.'" name="'.$this->name.'" rows="'.$this->rows.'" cols="'.$this->cols.'" placeholder="'.$this->placeholder.'">';
        
        echo $this->value;
             
        echo '</textarea>';
    }
}