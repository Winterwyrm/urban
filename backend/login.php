<?php

function processField(&$conn, &$value) {
  return hash("sha256", mysqli_real_escape_string($conn, htmlspecialchars($value)));
}

if (isset($_POST['submit'])) {
  $conn = mysqli_connect('localhost', 'root', 'c0nn3ctatx123', 'users');

  $username = processField($conn, $_POST["username"]);
  $pass = processField($conn, $_POST["pass"]);
  $query = mysqli_query($conn, "SELECT * FROM users where username = '" . $username . "' AND password = '" . $pass . "';");
  $row = mysqli_fetch_array($query);

  if ($row != NULL) {
    ini_set('session.gc_maxlifetime', 604800);
    session_set_cookie_params("3600");
    session_start();
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
      session_unset();
      session_destroy();
    }
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $row["username"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["name"]  = $row["name"];
    $_SESSION["cart"] = array();
    mysqli_close($conn);
    header("Location: http://localhost:8080/index.php");
    exit();
  } else {
    echo "Incorrect username or password";
  }
  mysqli_close($conn);
}

?>
