<?php

namespace Novapioneer\Admin\Settings;
use Novapioneer\Admin\Menu\Page;

class Section
{
    protected $id;

    protected $title;

    protected $page;

    protected $description;

    public function __construct($id, $title, Page $page, $description = "")
    {
        $this->id = $id;
        $this->title = $title;
        $this->page = $page;
        $this->description = $description;


        add_settings_section(
            $this->id,
            $this->title,
            array($this, 'render'),
            $this->page->getSlug()
        );
    }

    public function render()
    {
        echo $this->description;
    }

    public function getId()
    {
        return $this->id;
    }
}