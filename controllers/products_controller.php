<?php
  class ProductsController {
    public function home() {
      $products = array();
      $productsArray = Product::all();
      foreach ($productsArray as $key => $product) {
        $product->link = '<a href="?controller=products&action=add&id= '. $product->id . '" class="add-to-cart">Add to Cart</a>';
        $products[] = $product;
      }
      require_once('views/products/home.php');
    }

    public function cart() {
      $products = array();
      if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $id) {
          $product = Product::find($id);
          $product->link = '<a href="?controller=products&action=remove_item&id=' . $product->id .'" class="add-to-cart">Remove</a>';
          $products[] = $product;
        }
      }
      require_once('views/products/cart.php');
    }

    public function remove_item() {
      if (isset($_GET['id'])) {
        foreach ($_SESSION['cart'] as $key => $id) {
          if ($_GET['id'] === $id) {
            unset($_SESSION['cart'][$key]);
          }
        }
        $this->cart();
      } else {
        throw new Exception("No ID", 1); 
      }
    }

    public function add_item() {
      if (isset($_GET['id'])) {
        if ($_SESSION['username'] && $_SESSION['email']) {
          if (!in_array($_GET['id'], $_SESSION['cart'])) {
            $_SESSION['cart'][] = $_GET['id'];
          }
        } elseif (isset($_GET['username']) && isset($_GET['pwd']) && isset($_GET['email'])) {
          $_SESSION['username'] = $_GET['username'];
          $_SESSION['pwd'] = $_GET['pwd'];
          $_SESSION['email'] = $_GET['email'];
          if ($_SESSION['cart']) {
            if (!in_array($_GET['id'], $_SESSION['cart'])) {
              $_SESSION['cart'][] = $_GET['id'];
            }
          } else {
            $_SESSION['cart'][] = $_GET['id'];
          } 
        }
      }
      //header('Location:'.APP_URL);
    }

    public function add() {
     if (isset($_GET['id'])) {
        $product = Product::find($_GET['id']);
        $products = array($product);
        require_once('views/products/add.php');
      }
    }

    public function error() {
      require_once('views/products/error.php');
    }
  }

?>