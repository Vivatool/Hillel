<?php
  require_once './model/base_model.php';
  require_once './model/post.php';
  require_once './model/comment.php';
  require_once './router.php';
  require_once './actions/base_page.php';
  require_once './actions/index_page.php';
  require_once './actions/post_page.php';
  require_once './actions/add_post_page.php';
  require_once './actions/get_even_posts.php';
  require_once './actions/delete_page.php';
  require_once './actions/get_titles.php';
  require_once './actions/last_comments.php';
  require_once './actions/update_post_page.php';
  require_once './actions/last_Comment_On_Index.php';
  require_once './actions/sort_by_author.php';
  require_once './actions/sort_by_time.php';
  require_once './actions/sort_by_title.php';





  $router = new Router($_GET, $_POST);

  $router->attach('indexPage', new IndexPage());
  $router->attach('postPage', new PostPage());
  $router->attach('addPostPage', new AddPostPage());
  $router->attach('deletePostPage', new DeletePostPage());
  $router->attach('updatePostPage', new UpdatePostPage());
  $router->attach('getEvenPosts', new GetEvenPosts());
  $router->attach('getTitles', new GetTitles());
  $router->attach('getLastComments', new LastComments());
  $router->attach('getLastCommentOnIndex', new LastCommentOnIndex());
  $router->attach('sortPostByAuthor', new SortPostByAuthor());
  $router->attach('sortPostByTime', new SortPostByTime());
  $router->attach('sortPostByTitle', new SortPostByTitle());

  $router->serve();
