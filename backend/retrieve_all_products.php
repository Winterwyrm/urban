<?php

$conn = mysqli_connect('localhost', 'root', 'c0nn3ctatx123', 'users');
$query = "SELECT * from business";
$result = mysqli_query($conn, $query);

if (isset($_POST["sortby"])) {
  $product_list = array();
  while ($row = mysqli_fetch_array($result)) {
    array_push($product_list, $row);
  }
  usort($product_list, function($a, $b) {
    return $a["price"] <=> $b["price"];
  });
  foreach ($product_list as $row) {
    $encoded_product = urlencode($row["product"]);
    $encoded_business = urlencode($row["business"]);
    echo <<<DOC
    <div class="col align-center">
      <button class="product1">
        <a href="Product.php?product={$encoded_product}&business={$encoded_business}">
          <img src="{$row["image"]}" height="200px" width="200px" alt="" />
          <p style="color:black;">{$row["product"]}</p>
        </a>
      </button><br /><br /><br /><br />
    </div>
    DOC;
  }
} else {
  while ($row = mysqli_fetch_array($result)) {
    $encoded_product = urlencode($row["product"]);
    $encoded_business = urlencode($row["business"]);
    echo <<<DOC
    <div class="col align-center">
      <button class="product1">
        <a href="Product.php?product={$encoded_product}&business={$encoded_business}">
          <img src="{$row["image"]}" height="200px" width="200px" alt="" />
          <p style="color:black;">{$row["product"]}</p>
        </a>
      </button><br /><br /><br /><br />
    </div>
    DOC;
  }
}
mysqli_close($conn);

?>
