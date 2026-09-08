<?php

use \App\Controllers\PostsController;

include_once "../app/controllers/postsController.php";


switch ($_GET['posts']):
        //ROUTE DETAILS D'UN POST
    case 'show':
        PostsController\showAction($connexion, $_GET['id']);
        break;
    //ROUTE LISTE DES POSTS
    default:
        PostsController\indexAction($connexion);
        break;
endswitch;
