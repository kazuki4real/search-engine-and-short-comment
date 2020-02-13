<?php

require 'database.php';

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if ($_POST['login_pass'] !== '' && $_POST['login_pass'] === PASSWORD) {

  $_SESSION['pass'] = true;

  header('Location: edit.php');

  } elseif ($_POST['login_pass'] === '') {

    $errorBlank = '<p class="text-danger font-weight-bold">Fill in that shit Bra</p>';

} else {

  $errorPass = '<p class="text-danger font-weight-bold"> Login Error occurred </p>';

}

}

