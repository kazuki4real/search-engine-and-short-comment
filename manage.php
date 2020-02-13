<?php 

require 't_manage.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Manage the board</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-info">
  <div class="container my-5">
    <?php if (!empty($_SESSION['login_pass']) && $_SESSION['login_pass'] === true) : ?>
    <h3>If you are a manager of this page...</h3>
    <form action="" method="post">
      <div class="input-group input-group-lg my-5 w-50">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-lg">Manager Code</span>
        </div>
        <input type="password" id="login_pass" name="login_pass" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
      </div>
      <?php if (!empty($errorPass)) { echo $errorPass; }  ?><br>
      <?php if (!empty($errorBlank)) { echo $errorBlank; }  ?><br>
      <input class="btn btn-light" name="submit" type="submit" value="Submit">
    </form>
    <?php endif ;?>
  </div>
</body>
</html>