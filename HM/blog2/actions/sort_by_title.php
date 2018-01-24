<?php

class SortPostByTitle extends BasePage
{
private $postModel;
function __construct()
{
$this->postModel = new Post();
}
public function get(){
$posts = $this->postModel->sortPostByTitle();
require_once './view/index.php';
}
}