<?php

require 't_manage.php';
require 't_edit.php';
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
    <section class="mt-5 bg-secondary w-100 pl-5 py-5">
      <?php

      if (isset($articles)) {

        // var_dump($articles);
        // exit();

      foreach ($articles as $article) {
        echo "<form action=\"\" method=\"post\">
        <input type=\"submit\" name=\"delete\" class=\"btn btn-light py-1\" value=\"Delete\">
        </form>";
        echo " <div>
        <h3> ". h($article['a_title']) . "</h3>
        <p> ". h($article['a_text']) . "</p>
        <p> ". h($article['a_date']) . "</p>
        <p> ". h($article['a_author']) . "</p>
        </div>";
        echo '<hr>';
      }
    }
      ?>
    </section>
  </div>
</body>
</html>