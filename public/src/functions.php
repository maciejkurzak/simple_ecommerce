<?php

function login($connection, $email, $password): mysqli_result|bool
{
  $sql = "SELECT * FROM users WHERE email = '$email'";
  return mysqli_query($connection, $sql);
}

function signup($connection, $email, $password): mysqli_result|bool
{
  $sql = "INSERT INTO users (email, password) VALUES('$email', '$password')";
  return mysqli_query($connection, $sql);
}
