<?php
class SortPostByAuthor extends BasePage
{
    private $postModel;
    public function __construct(){
        $this->postModel = new Post();
    }
    protected function get() {
        $posts = $this->postModel->sortPostByAuthor();
        require_once './view/index.php';
    }
}