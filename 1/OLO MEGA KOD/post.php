<?php

include_once 'classes/Posts.class.php';
include_once 'classes/Users.class.php';

$post = new Posts;
$usr = new Users;

if($post->addPost()){
    $usr->redir('index.php');
}


?>
