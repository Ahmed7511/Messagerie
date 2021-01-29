<?php
require('../model/getPost.php');
require('../model/post.php');
 
$getPosts = getPosts();
$post = post();
 require('../View/homeView.php');
 