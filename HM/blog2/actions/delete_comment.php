<?php

class GetDeleteComment extends BasePage {
    private $comments;

    public function __construct() {
        $this->comments = new comment();
    }

    protected function post() {
        $this->comments->deleteComment($this->postData['id']);
        $this->redirect('./view/post.php');
    }
}