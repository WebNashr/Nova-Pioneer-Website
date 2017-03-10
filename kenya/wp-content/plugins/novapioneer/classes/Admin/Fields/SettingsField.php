<?php

namespace Novapioneer\Admin\Fields;
use WP_Error;
use Novapioneer\Admin\Settings\Section;
use Novapioneer\Admin\Menu\Page;

abstract class SettingsField
{
    protected $id;

    protected $name;

    protected $value;

    protected $placeholder;

    protected $class;

    protected $label;

    protected $page;

    protected $section;

    
    abstract public function render(array $args);

    public function attachToPage(Page $page)
    {
        $this->page = $page;
    }

    public function attachToSection(Section $section)
    {
        $this->section = $section;
    }

    public function getCurrentValue()
    {
        return get_option($this->name);
    }

    public function refreshValue()
    {
        $this->value = $this->getCurrentValue();

        return $this->value;
    }

    public function register()
    {
        if( isset($this->page) && !empty($this->page) && isset($this->section) && !empty($this->section) ):
            add_settings_field(
                $this->name,
                $this->label,
                array($this, 'render'),
                $this->page->getSlug(),
                $this->section->getId(),
                array( 'label_for' => $this->id )
            );
        else:
            return new WP_Error( 'Novapioneer Settings', "You need to attach this field to a page and a section." );
        endif;
    }
}