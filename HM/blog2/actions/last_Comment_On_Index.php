<?php

class LastCommentOnIndex extends BasePage {

    private $LastCommentOnIndex;

    public function __construct() {
        $this->LastCommentOnIndex = new Comment();
    }


    protected function get() {
        $lastComment = $this->LastCommentOnIndex->GetLastCommentOnIndex();
        if (isset($lastComment)) {
            require_once './view/index.php';
        } else {
            $this->notFound();
        }
    }
}