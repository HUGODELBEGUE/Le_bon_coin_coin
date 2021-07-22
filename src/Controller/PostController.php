<?php


namespace App\Controller;
use App\Controller\Trait\RenderTrait;

class PostController
{
    use RenderTrait;
    public function index() {
        $this->render("posts/index.html.php");
    }
}