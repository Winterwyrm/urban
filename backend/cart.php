<?php

if (isset($_POST["query"])) {
  $product = array($_POST["product"], $_POST["business"], $_POST["price"], $_POST["image"], $_POST["description"]);
  if (!in_array($product, $_SESSION["cart"]))
    array_push($_SESSION["cart"], $product);
}

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
  echo "<section class='wrapper'><div class='inner'>";
  foreach ($_SESSION["cart"] as $item) {
    echo <<<CONTENT
    <div class="itemstopurchase">
      <img src="{$item[3]}" width="200px" height="200px"/>
      <h3><a href="Product.php?product={$item[0]}&business={$item[1]}">{$item[0]}</a></h3>
      <h4>\${$item[2]}</h4>
      <p>{$item[4]}</p>
      <button>Remove</button>
    </div>
    CONTENT;
  }
}

?>
