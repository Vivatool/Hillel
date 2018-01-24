<?php
class SortPostByTime extends BasePage
{
    private $postModel;
    public function __construct(){
        $this->postModel = new Post();
    }
    protected function get() {
        $posts = $this->postModel->sortPostByTime();
        require_once './view/index.php';
    }
}