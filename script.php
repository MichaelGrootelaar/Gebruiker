<?php
  session_start();
  require_once("class.php");

  $user = new User($_POST['username'], $_POST['password']);

  if (isset($_SESSION['users'])) {
    echo 'wtwtwt';
    $array = [];
  } else {
    $array = unserialize($_SESSION['users']);
  }

  array_push($array, $user);

  print_r($array);
  $_SESSION['users'] = $array;

  header('Location: index.php');
?>
