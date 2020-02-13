<?php

  // require 'database.php';

  if (!empty($_SESSION['pass']) && $_SESSION['pass'] === true) {
    echo 'You are authorized manager';
    unset($_SESSION['pass']);

  $sql = 'SELECT * from article order by id desc';
  $stmt = $db->query($sql);
  $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

//   if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $message_id = $_GET['message_id'];

//     if ($_POST['delete']) {

//       $sql = "SELECT from article where id = $message_id";
//       $stmt = $db->prepare($sql);
//       $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      

//     }


// }

  } else {
  
    header('Location: manage.php');
    exit();
  
  }

  

?>