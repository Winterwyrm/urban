<?php

function process_rows(&$res, &$query, &$fields) {
  $count = 0;
  while ($row = mysqli_fetch_array($res)) {
    $product_found = false;
    foreach ($fields as $field) {
      $haystack = strtolower($row[strtolower($field)]);
      $needles = explode(" ", strtolower($query));
      foreach ($needles as $needle) {
        if (strpos($haystack, $needle) !== false) {
          echo "<div class=\"col align-center\">";
          echo "<button class=\"product1\">";
          echo "<a href=\"product1.htm\">";
          echo "<img src=\"" . $row["image"] . "\"/>";
          echo "<p style=\"color:black;\">" . $row["product"] . "</p></a>";
          echo "</button></div>";
          $count += 1;
          $product_found = true;
          break;
        }
      }
      if ($product_found)
        break;
    }
  }
  return $count;
}

if (isset($_POST["query"])) {
  $conn = mysqli_connect('localhost', 'root', 'c0nn3ctatx123', 'users');
  $query = mysqli_real_escape_string($conn, htmlspecialchars($_POST["query"]));
  $category = $_POST["category"];
  $err_msg = "<div align='center' style='padding-left: 39%;'> We couldn't find anything relating to \"" . $_POST["query"] . "\"</div>";

  $mysql_query = "SELECT * from business;";
  $res = mysqli_query($conn, $mysql_query);
  if (mysqli_num_rows($res) == 0) {
    echo $err_msg;
    mysqli_close($conn);
    exit();
  }
  if ($category == "Product" || $category == "Business") {
    $fields = array($category);
    $count = process_rows($res, $query, $fields);
    if ($count == 0) {
      echo $err_msg;
    }
  } else if ($category == "All") {
    $fields = array("Product", "Business", "Description");
    $count = process_rows($res, $query, $fields);
    if ($count == 0) {
      echo $err_msg;
    }
  }
  mysqli_close($conn);
}

?>
