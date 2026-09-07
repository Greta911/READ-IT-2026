<?php
//ROUTE SHOW: detail d'un post
//PATTERN: /posts/id/slug
//URL: ?posts=show&id=x
//CTRL: postsController
//ACTION: show

if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';


//ROUTE PAR DEFAUT: le 10 dernieres posts 
//PATTERN: /
//URL: ?
//CTRL: postsController
//ACTION: index
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;
