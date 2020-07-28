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
    <header>
      <h1>Shopping Cart</h1>
      <i style="position: relative; bottom: 80px; left: 350px;"class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
    </header>
    <div class="purchaseButtons">
      <button class="Continue" onclick="window.location.replace('http://localhost:8080/index.php');">Continue Shopping</button>
      <button id="open" onclick="javascript:void window.open('Purchase.html','1595942236492','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Buy Now!</button>
    </div>
    <h2>Items In Cart:</h2><hr />
    <div class="itemstopurchase">
      <img src="{$item[3]}" />
      <h3><a href="Product.php?product={$item[0]}&business={$item[1]}">{$item[0]}</a></h3>
      <h4>\${$item[2]}</h4>
      <p>{$item[4]}</p>
      <button id="open" onclick="javascript:void window.open('remove.html','1595942236492','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">Remove</button>
    </div>
    CONTENT;
  }
}

?>
