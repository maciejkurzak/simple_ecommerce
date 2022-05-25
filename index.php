<?php
// Grabs the URI and breaks it apart in case we have querystring stuff
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
require_once './private/config/variables.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/css/styles.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/css/header.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/css/products.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/assets/css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>Candle Shop</title>
</head>
<body>
<?php include './public/templates/header.php'; ?>
<div class='content'>
<?php // Router

switch ($request_uri[0]) {
  // Home page
  case '/simple_ecommerce/':
    require './public/views/products.php';
    break; // Login page
  case '/simple_ecommerce/login/':
    require './public/views/login.php';
    break; // 404
  default:
    header('HTTP/1.0 404 Not Found');
    require './public/views/404.php';
    break;
} ?>
</div>
</body>

