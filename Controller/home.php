<?php
require('./model/model.php');
 
$getPosts = getPosts();
$post = post();
 require('./View/homeView.php');