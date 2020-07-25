<?php
  session_start();
  if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    echo "<li><a href='/Cart.html'> Hello, " . $_SESSION["name"] . "</a></li>";
    echo "<li><form action=\"" . $_SERVER["REQUEST_URI"] . "\" method='post'>";
    echo "<input type=\"submit\" name=\"submit\" value=\"Sign Out\"></input></form></li>";
    if (isset($_POST["submit"])) {
      unset($_SESSION);
      session_destroy();
    }
  }
?>
