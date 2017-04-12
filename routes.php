<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'products':
        require_once('models/product.php');
        $controller = new ProductsController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array(
    'products' => [
      'add', 
      'add_item', 
      'cart', 
      'remove_item', 
      'home', 
      'error'
    ],
  );

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('products', 'error');
    }
  } else {
    call('products', 'error');
  }

?>