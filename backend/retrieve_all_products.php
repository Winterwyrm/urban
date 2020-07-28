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
    echo <<<DOC
    <div class="col align-center">
      <button class="product1">
        <a href="Product.php?product={$row["product"]}&business={$row["business"]}">
          <img src="{$row["image"]}" alt="" />
          <p style="color:black;">{$row["product"]}</p>
        </a>
      </button><br /><br /><br /><br />
    </div>
    DOC;
  }
} else {
  while ($row = mysqli_fetch_array($result)) {
    echo <<<DOC
    <div class="col align-center">
      <button class="product1">
        <a href="Product.php?product={$row["product"]}&business={$row["business"]}">
          <img src="{$row["image"]}" alt="" />
          <p style="color:black;">{$row["product"]}</p>
        </a>
      </button><br /><br /><br /><br />
    </div>
    DOC;
  }
}
mysqli_close($conn);

?>
