<?php

function processField(&$conn, &$value) {
  return hash("sha256", mysqli_real_escape_string($conn, htmlspecialchars($value)));
}

function addNewUser(&$conn) {

  $name = mysqli_real_escape_string($conn, htmlspecialchars($_POST["name"]));
  $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST["email"]));
  $username = processField($conn, $_POST["username"]);
  $pass = processField($conn, $_POST["pass"]);

  $tuple = "('" . $name . "', '" . $email . "', '" . $username . "', '" . $pass . "', '" . $_POST["isbusiness"] . "')";
  $query = "INSERT INTO users (name, email, username, password, is_business) VALUES " . $tuple;
  $data = mysqli_query($conn, $query);
  if ($data) {
    ini_set('session.gc_maxlifetime', 604800);
    session_set_cookie_params("3600");
    session_start();
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
      session_unset();
      session_destroy();
    }
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["name"]  = $_POST["name"];
    $_SESSION["cart"] = array();
    $_SESSION["isbusiness"] = $_POST["isbusiness"];
    mysqli_close($conn);
    if ($_POST["isbusiness"] === "0") {
      header('Location: http://localhost:8080/cart.php');
    }
    exit();
  }
  mysqli_close($conn);
}

function trySignUp(&$conn) {
  $username = processField($conn, $_POST["username"]);
  $pass = processField($conn, $_POST["pass"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $username . "' AND " . "password = '" . $pass . "' AND email = '" . $email . "';");
  $row = mysqli_fetch_array($query);
  if ($row != NULL) {
    echo "This user already exists";
    mysqli_close($conn);
  } else {
    addNewUser($conn);
  }
}

if (isset($_POST["submit"])) {
  if ($_POST["pass"] != $_POST["confirm"]) {
    echo "Passwords do not match";
  } else if ((isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == false) || !isset($_SESSION["loggedin"])) {
    $conn = mysqli_connect('localhost', 'root', 'c0nn3ctatx123', 'users');
    trySignUp($conn);
  } else {
    header("Location: http://localhost:8080/search.html");
  }
}

?>
