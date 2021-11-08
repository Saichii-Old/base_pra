<?php
session_start();

echo "account:" . $_SESSION['name'];

echo "<hr>";

echo "students:";

echo "<pre>";

print_r($_SESSION['students']);

echo "</pre>";

?>