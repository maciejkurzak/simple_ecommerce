<?php

require_once './private/config/variables.php';

if (isset($_POST['login'])) {
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
  $email = $_POST['email'];
  $password = $_POST['password'];
  $stmt = $mysqli->prepare(
    'SELECT id, firstname, password FROM users WHERE (email=?)'
  );
  $stmt->bind_param('s', $email);
  $stmt->execute();
  $stmt->bind_result($id, $firstname, $password_hash);
  $rs = $stmt->fetch();
  $stmt->close();
  if (!$rs || !password_verify($password, $password_hash)) {
    echo "<script>alert('Invalid Details. Please try again.')</script>";
  } else {
    $_SESSION['uid'] = $id;
    $_SESSION['firstname'] = $firstname;
    // Redirect to home page
    header('Location: ' . BASE_URL);
    exit();
  }
}
