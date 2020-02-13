<?php

require 't_index.php';
require 'functions.php';

if (isset($_POST['submit'])) {

  if ($_POST['text'] === '') {

    header('Location: ' . 'http://' . $_SERVER['HTTP_HOST']);

  } else {

    session_start();
    $_SESSION['page'] = true;

  $search = $_POST['text'];
  $searchWord = addslashes($search);
  $sql = "SELECT * FROM article where a_title LIKE '%$searchWord%' OR a_text LIKE '$searchWord%'
  OR a_author LIKE '$searchWord%' order by id desc";
  $stmt = $db->query($sql);
  $match = $stmt->fetchAll(PDO::FETCH_ASSOC);


  // var_dump($match);
  // exit();

  $search = $_POST['text'];
  $searchWord = addslashes($search);
  $sql = "SELECT * FROM article where a_title LIKE '%$searchWord%' OR a_text LIKE '%$searchWord%'
  OR a_author LIKE '%$searchWord%'";
  $stmt = $db->query($sql);
  $rowCount1 = $stmt->rowCount();
  // var_dump($rowCount1);
  // exit();
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Result</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
  hr {
    color: red;
  }
</style>
<body class="bg-info">
  <div class="container">
    <h1 class="mt-5">
      Search Result (
        <?php if (!empty($rowCount1)) { echo $rowCount1; } else { echo 0 ;} ?>
      )
    </h1>
  </div>
  <div class="container">
    <div class="mt-5 bg-secondary w-100 pl-5 py-5">
    <?php

    if (!empty($_SESSION['page']) && $_SESSION['page'] === true) {

    if (!empty($match)) {

      foreach ($match as $matches) {
        echo " <div>
        <h3> ". h($matches['a_title']) . "</h3>
        <p> ". h($matches['a_text']). "</p>
        <p> ". h($matches['a_date']). "</p>
        <p> ". h($matches['a_author']) . "</p>
        </div>";
        echo '<hr>';
      }
    }
    else {
      // $search = $_POST['text'];
      echo '<h3>' . '- No article matches'. ' " ' . h($_POST['text']) . ' " '. 'yet -' . '</h3>';
      echo '<hr>';
    }
  } else {
    header('Location: ' . 'http://' . $_SERVER['HTTP_HOST']);
    exit();
  }
    ?>
    </div>
    <button class="btn btn-light mt-5"><a class="text-dark" href="/">Back</a></button>
  </div>
</body>
</html>
