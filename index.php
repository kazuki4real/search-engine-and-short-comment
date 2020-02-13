<?php

require 't_index.php';
require 'functions.php';


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-info">
  <div class="container">
    <form action="search.php" method="post" class="mt-5">
      <input type="text" name="text" placeholder="Search">
      <input type="submit" name="submit" value="search">
    </form>
    <button class="btn btn-light float-right"><a href="/add.php" class="text-dark text-decoration-none">Add Article</a></button>
  </div>
  <div class="container">
    <p class="mt-5 font-weight-bold">Number of articles ( <?= h($rowCount); ?> )</p>
    <section class="mt-5 bg-secondary w-100 pl-5 py-5">
      <?php
      foreach ($articles as $article) {
        echo " <div>
        <h3> ". h($article['a_title']) . "</h3>
        <p> ". h($article['a_text']) . "</p>
        <p> ". h($article['a_date']) . "</p>
        <p> ". h($article['a_author']) . "</p>
        </div>";
        echo '<hr>';
      }
      ?>
    </section>
  </div>
  </body>
</html>