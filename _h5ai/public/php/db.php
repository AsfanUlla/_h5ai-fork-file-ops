<?php
$con = new mysqli("localhost", "_USER_", "_PASSWORD_", "_DB_");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
