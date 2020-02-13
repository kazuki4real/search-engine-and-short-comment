<?php

require 'database.php';

$titleEmp = '';
$textEmp = '';
$authorEmp = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // validation
  if (!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['author'])) {
    $sql = "INSERT into article (a_title, a_text, a_author, a_date) values (:a_title, :a_text, :a_author, now())";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':a_title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':a_text', $_POST['text'], PDO::PARAM_STR);
    $stmt->bindParam(':a_author', $_POST['author'], PDO::PARAM_STR);
    $stmt->execute();

    header('Location:' . 'http://' . $_SERVER['HTTP_HOST']);

    } 
    
  elseif ($_POST['title'] === '' || $_POST['text'] === '' || $_POST['author'] === '') {

    if ($_POST['title'] === '') {

      $titleEmp = 'Fill in the title';

    } elseif ($_POST['text'] === '') {

      $textEmp = 'Fill in the description';

    } elseif ($_POST['author'] === '') {

      $authorEmp = 'Fill in the Author';
      
    } else {
      echo 'Article posted';
    }

  } 
  
  

}