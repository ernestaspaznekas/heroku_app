<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      throw new Exception("Not implement", 1);
      /*if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;dbname=php_mvc', 'root', '', $pdo_options);
      }
      return self::$instance;*/
    }

    public static function read() {
      $productsFileName = APP_URL . 'products.txt';
      $productsArray = file($productsFileName, FILE_IGNORE_NEW_LINES);
      return $productsArray;
    }
  }
  
?>