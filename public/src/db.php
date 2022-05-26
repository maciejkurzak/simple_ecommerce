<?php

$connection = mysqli_connect(
  DATABASE_ADDRESS,
  DATABASE_USERNAME,
  DATABASE_PASSWORD,
  DATABASE_NAME
);

if (!$connection) {
  echo 'Cannot connect to database';
  die('Connection failed: ' . mysqli_connect_error());
}
