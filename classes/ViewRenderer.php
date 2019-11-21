<?php


class ViewRenderer
{
    private $template;


    public function __construct($template)
    {
        $this->template = $template;
    }


    public function renderView()
    {
        $template = $this->template;

        include_once('layouts/template.php');
    }
    
}