<?php
  session_start();
  define('APP_URL', 'http://muscle.lt/old/shop/');
  require_once('connection.php');
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'products';
    $action     = 'home';
  }
  require_once('views/layout.php');
  
?>