<?php
require_once 'vendor/autoload.php';
$user = new \App\User();
$user1 = new \Bpp\User();
$user2 = new \Bpp\Cpp_My_Sam_User();
var_dump($user);
var_dump($user1);
var_dump($user2);
?>