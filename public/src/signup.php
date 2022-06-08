<?php

require_once './private/config/variables.php';

if (isset($_POST['signup'])) {
  // Db connection
  $mysqli = new mysqli(
    DATABASE_ADDRESS,
    DATABASE_USERNAME,
    DATABASE_PASSWORD,
    DATABASE_NAME
  );
  if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: (' .
      $mysqli->connect_errno .
      ') ' .
      $mysqli->connect_error;
  }

  // Get user input
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Check if account with email already exists
  $result = 'SELECT count(*) FROM users WHERE email=?';
  $stmt = $mysqli->prepare($result);
  $stmt->bind_param('s', $email);
  $stmt->execute();
  $stmt->bind_result($does_exist);
  $stmt->fetch();
  $stmt->close();
  // If account exists, redirect to login page
  if ($does_exist > 0) {
    echo "<script>alert('Email id already associated with another account. Please try with different Email.');</script>";
  }
  // If email not exist
  else {
    $sql =
      'INSERT into users (firstname, lastname, email, password) VALUES (?,?,?,?)';
    $stmti = $mysqli->prepare($sql);
    $password_hash = password_hash($password, PASSWORD_BCRYPT, hash_options);
    $stmti->bind_param('ssss', $firstname, $lastname, $email, $password_hash);
    $stmti->execute();
    $stmti->close();
    // Redirect to login page
    header('Location: ' . BASE_URL . 'login');
    exit();
  }
}
