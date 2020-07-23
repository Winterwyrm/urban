<?php

function processField(&$conn, &$value) {
  return hash("sha256", mysqli_real_escape_string($conn, htmlspecialchars($value)));
}

function addNewUser(&$conn) {

  $name = processField($conn, $_POST["name"]);
  $email = processField($conn, $_POST["email"]);
  $username = processField($conn, $_POST["username"]);
  $pass = processField($conn, $_POST["pass"]);

  $tuple = "('" . $name . "', '" . $email . "', '" . $username . "', '" . $pass . "')";
  $query = "INSERT INTO users (name, email, username, password) VALUES " . $tuple;
  $data = mysqli_query($conn, $query);
  if ($data) {
    session_start();
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
      session_unset();
      session_destroy();
    }
    $_SESSION["loggedin"] = true;
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["name"]  = $_POST["name"];
    header('Location: http://localhost:8080');
    exit();
  }
}

function trySignUp(&$conn) {
  $username = processField($conn, $_POST["username"]);
  $pass = processField($conn, $_POST["pass"]);
  $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $username . "' AND " . "password = '" . $pass . "';");
  $row = mysqli_fetch_array($query);
  if ($row != NULL) {
    echo "This user already exists";
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
