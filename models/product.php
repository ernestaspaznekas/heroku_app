<?php
  class Product {
    // we define 4 attributes
    // they are public so that we can access them directly
    public $id;
    public $name;
    public $price;
    public $src;

    public function __construct($id, $name, $price, $src) {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->src = $src;
    }


    public static function all() {
      $products = array();
      $productsArray = DB::read();
      foreach ($productsArray as $key => &$product) {
        $arr = explode("|", $product);
        $products[] = new Product($arr[0], $arr[1], $arr[2], $arr[3]); 
      }
      return $products;
    }

    public function find($id) {
      $productsArray = DB::read();
      foreach ($productsArray as $key => $product) {
          $arr = explode("|", $product);
          if ($arr[0] == $id) {
            return $product = new Product($arr[0], $arr[1], $arr[2], $arr[3]); 
          }
      }
      return false;
    }
  }
?>