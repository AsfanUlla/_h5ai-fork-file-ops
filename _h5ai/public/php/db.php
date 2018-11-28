<?php
$con = new mysqli("localhost", "root", "n0t34sy%", "user");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
