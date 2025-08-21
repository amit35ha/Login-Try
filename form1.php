<?php
$allowed_users = array("admin"=>"root", "myadmin"=>"root", "ABC"=>"345");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["usrnm"];
$password = $_POST["psswrd"];
if (array_key_exists($username, $allowed_users) && $allowed_users[$username] == $password) {
header("Location: form.html");
exit();
} else {
header("Location: wrong.html");
exit();
}
}
?>