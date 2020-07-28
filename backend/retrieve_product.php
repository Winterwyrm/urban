<?php

if ($_GET["product"] !== null && $_GET["business"] !== null) {
  $conn = mysqli_connect('localhost', 'root', 'c0nn3ctatx123', 'users');
  $product = mysqli_real_escape_string($conn, htmlspecialchars($_GET["product"]));
  $business = mysqli_real_escape_string($conn, htmlspecialchars($_GET["business"]));
  $query = "SELECT * FROM business WHERE product='" . $product . "' AND business='"  . $business . "';";

  $res = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($res);

  if ($row) {
    echo <<<END
    <section class="wrapper">
      <div class="product1page">
        <h2><span class="image left"><img src="{$row["image"]}" alt="" /></span>{$row["product"]}</h2>
      </div>
      <p><b>\${$row["price"]} | by {$row["business"]}</b></p>
      <div class="container">
        <div class="tab_trigger">
          <ul id="product-options">
            <li><button id="cart-button" onclick="submit_form('hide');">Add to Cart</button></li>
            <br>
            <li><p>Description: {$row["description"]}</p></li>
          </ul>
        </div>
        <form style="display: none" id="hide" action="/Cart.php" method="post">
          <input type="hidden" name="query" value="a"></input>
          <input type="hidden" name="product" value="{$row["product"]}"></input>
          <input type="hidden" name="business" value="{$row["business"]}"></input>
          <input type="hidden" name="price" value="{$row["price"]}"></input>
          <input type="hidden" name="image" value="{$row["image"]}"></input>
          <input type="hidden" name="description" value="{$row["description"]}"></input>
        </form>
    </section>
    END;
  }
  mysqli_close($conn);
} else {
  echo "<section class='wrapper'><h2>This product is not available</h2></section>";
}

?>
