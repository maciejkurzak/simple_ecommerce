<?php

if (isset($_REQUEST['login'])) {
  $results = login($connection, $email, $password);

  foreach ($results as $result) {
    $pwd_check = password_verify($password, $result['password']);

    if ($pwd_check) {
      $_SESSION['user'] = $result;
      header('Location: ' . BASE_URL . '/index.php');
      exit();
    } else {
      $error = 'Incorrect email or password';
    }
  }
}

if (isset($_REQUEST['signup'])) {
  $results = signup($connection, $email, $password);
}
