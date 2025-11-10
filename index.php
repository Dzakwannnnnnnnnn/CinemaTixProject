<?php
require 'functions.php';
$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/') {
  require '/../view/users/beranda.php';
} else if ($uri == '/login') {
  require '/../view/users/loginUser.php';
}
