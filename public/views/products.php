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

$sql = '
  SELECT
    products.id,
    products.name,
    price,
    imageName,
    manufacturers.name as manufacturersName
  FROM 
   products
  LEFT JOIN manufacturers on products.manufacturerID = products.id
';

$result = $conn->query($sql);
?>

<div class="products">
  <div class="section-header">Products</div>
  <div class="products-grid">
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "
          <div class='product'>
            <img src='./public/assets/img/products/{$row['imageName']}.jpg' alt=''>
            <div class='info'>
              <p class='category'>{$row['manufacturersName']}</p>
              <div class='name-price'>
                <p class='name'>{$row['name']}</p>
                <p class='price'>\${$row['price']}</p>
              </div>
            </div>
          </div>
        ";
      }
    } else {
      echo '0 results';
    }
    $conn->close();
    ?>
  </div>
</div>