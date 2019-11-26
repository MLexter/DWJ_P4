<?php


class ViewRenderer
{
    private $template;


    public function __construct($template)
    {
        $this->template = $template;
    }


    public function renderView($posts = null)
    {
        $template = $this->template;
        ob_start();
        include(VIEW.$template.'.php');
        $body_content = ob_get_clean();
        include_once(LAYOUTS.'template.php');
    }
    
}