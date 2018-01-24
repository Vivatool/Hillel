<?php

class Router {
  const ROUTE_KEY = 'r';

  private $getArray;
  private $postArray;
  private $actionArray = [];

  public function __construct($getArray, $postArray) {
    $this->getArray = $getArray;
    $this->postArray = $postArray;
  }

  public function attach($actionName, $action) {
    $this->actionArray[$actionName] = $action;
  }

  public function serve() {
    switch ($this->getArray[self::ROUTE_KEY]) {
      case '/':
        $this->actionArray['indexPage']->process($this->getArray, $this->postArray);
        break;
      case '/post':
        $this->actionArray['postPage']->process($this->getArray, $this->postArray);
        break;
      case '/addPost':
        $this->actionArray['addPostPage']->process($this->getArray, $this->postArray);
        break;
      case '/deletePost':
        $this->actionArray['deletePostPage']->process($this->getArray, $this->postArray);
        break;
      case '/getTitles':
          $this->actionArray['getTitles']->process($this->getArray, $this->postArray);
          break;
      case '/getEvenPosts':
          $this->actionArray['getEvenPosts']->process($this->getArray, $this->postArray);
          break;
      case '/getLastComments':
          $this->actionArray['getLastComments']->process($this->getArray, $this->postArray);
          break;
      case '/updatePost':
          $this->actionArray['updatePostPage']->process($this->getArray, $this->postArray);
          break;
      case '/GetLastCommentOnIndex':
          $this->actionArray['GetLastCommentOnIndex']->process($this->getArray, $this->postArray);
          break;
      case '/deleteComment':
          $this->actionArray['deleteComment']->process($this->getArray, $this->postArray);
          break;
      case '/sortPostByAuthor':
          $this->actionArray['sortPostByAuthor']->process($this->getArray, $this->postArray);
          break;
      case '/sortPostByTime':
          $this->actionArray['sortPostByTime']->process($this->getArray, $this->postArray);
          break;
      case '/sortPostByTitle':
          $this->actionArray['sortPostByTitle']->process($this->getArray, $this->postArray);
          break;

        default:
        header('location: /index.php?r=/');
        break;
    }
  }

  public function dump() {
    var_dump($this);
  }

}
