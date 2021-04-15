<?php
  $page = $_SERVER['REQUEST_URI'];
  
  $page = explode('?', $page);
  $page = $page[0];
  $page = explode('/', $page);
  $page = $page[1];
  if ($page == '') {
    $page = 'main';  
  }
  $server_name = 'http://' . $_SERVER["SERVER_NAME"] . '/';
  $path_to_tpl = 'src/mvc/templates/';
  $path_to_ctl = 'src/mvc/controllers/';
  $path_to_mdl = 'src/mvc/models/';
  $path_to_img = 'src/img/';
  include 'function.php';
  include 'controller.ctl.php';
?>