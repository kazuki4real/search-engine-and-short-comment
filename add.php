<?php
  require 't_add.php';
  require 'functions.php';

  // $title = '';
  // $text = '';
  // $author = '';

  // $title = $_POST['title'];
  // $text = $_POST['text'];
  // $author = $_POST['author'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Your article</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
  .error {
    font-size: 30px;
  }
</style>
<body class="bg-info">
  <section>
    <div class="container">
      <h3 class="mt-5">Memo</h3>
    </div>
  </section>
  <div class="error container text-danger">
    <?= h($titleEmp); ?>
    <?= h($textEmp); ?>
    <?= h($authorEmp); ?>
  </div>
  <div class="container">
      <form action="" method="post">
          <input type="text" name="title" placeholder="Your article title" 
          value="<?php if (!empty($_POST['title'])) {echo h($_POST['title']); } ?>" class="rounded-sm w-50 mb-5 mt-5"><br>

          <div class="text-center">
          <textarea name="text" placeholder="Your article description" 
          value="<?php if (!empty($_POST['text'])) { echo h($_POST['text']); }  ?>" class="form-control rounded-sm w-50 mb-3"></textarea><br>
          </div>

          <input type="text" name="author" placeholder="Your name" 
          value="<?php if (!empty($_POST['author'])) { echo h($_POST['author']); } ?>" class="rounded-sm w-50 mb-5"><br>

          <input type="submit" name="save" class="rounded-sm w-50 mb-5"><br>
      </form>
      <button class="btn btn-light"><a class="text-dark text-decoration-none" href="/">Back</a></button>
  </div>
</body>
</html>