<?php

// Create connection
$conn = new mysqli(
  DATABASE_ADDRESS,
  DATABASE_USERNAME,
  DATABASE_PASSWORD,
  DATABASE_NAME
);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$sql =
  '
  SELECT
    products.id,
    products.name,
    price,
    imageName,
    manufacturers.name AS manufacturersName
  FROM
    products
      LEFT JOIN manufacturers
        ON products.manufacturerID = manufacturers.id
  WHERE products.id = ' .
  $_GET['id'] .
  '
';

$result = $conn->query($sql);
?>

<?php
$base_url = BASE_URL;

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "
      <div class='product-box'>
        <img src='{$base_url}public/assets/img/products/{$row['imageName']}.jpg' alt='{$row['name']}'>
        <div class='product-info'>
          <p class='manufacturer'>{$row['manufacturersName']}</p>
          <p class='product-name'>{$row['name']}</p>
          <div class='price-text'>
            <p class='price'>\${$row['price']}</p>
            <p class='text'>inc. VAT</p>
          </div>
          <a href='' class='button'>
            <span>Add to cart</span>
            <i class='ri-shopping-cart-line'></i></a>
        </div>
      </div>
    ";
  }
} else {
  echo 'ni mo takiego produktu';
  //      header('HTTP/1.0 404 Not Found');
  //      require './public/views/404.php';
}
$conn->close();


?>
