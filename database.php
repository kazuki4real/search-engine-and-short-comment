<?php

ini_set('display_errors', 1);

define('DB_DATABASE','searchdb');
define('DB_USERNAME','dbuser');
define('DB_PASSWORD','search123');
define('PDO_DSN','mysql:host=localhost;dbname=' . DB_DATABASE);

define('PASSWORD', 'hello1');

try{
  //DB接続
  $db = new \PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
  //エラーをスロー
  $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

} catch(\PDOException $e){
  echo $e->getMessage();
  exit;
}

?>

