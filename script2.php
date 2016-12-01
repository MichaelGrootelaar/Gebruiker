<?php
  session_start();
  require_once("class.php");

  $users = unserialize($_SESSION['users']);
  print_r($users);
  foreach ($users as $users) {
    if ($users->checkPassword($_POST['username'], $_POST['password'])) {
      $_SESSION['user'] = $users->getUsername();
      break;
    } else {
      $_SESSION['user'] = false;
    }
  }
  

  // header('Location: index.php');
?>
