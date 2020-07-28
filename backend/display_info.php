<?php
  session_start();
  if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    if (isset($_POST["submit"])) {
      unset($_SESSION);
      session_destroy();
    } else {
      if (isset($_SESSION["isbusiness"]) && $_SESSION["isbusiness"] === "1") {
        echo "<li><a href='/BusinessPage.php'>";
      } else {
        echo "<li><a href='/Cart.php'>";
      }
      echo "Hello, " . $_SESSION["name"] . "</a></li>";
      echo "<li><form action=\"" . $_SERVER["REQUEST_URI"] . "\" method='post'>";
      echo "<input type=\"submit\" name=\"submit\" value=\"Sign Out\"></input></form></li>";
    }
  }
?>
