<?php


namespace App\Controller\Trait;


trait RenderTrait
{
    public function render($view) {
        require_once "../templates/" . $view;
        require_once "../templates/base.html.php";

    }
}