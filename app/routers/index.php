<?php

//ROUTE PAR DEFAUT: le 10 dernieres posts 
//PATTERN: /
//URL: ?
//CTRL: postsController
//ACTION: index
if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';

else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;
