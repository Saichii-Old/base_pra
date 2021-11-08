<?php
session_start();

$_SESSION['name']='saichi';

echo $_SESSION['name'];

$_SESSION['students']=['marry','jack','andy','jeff'];




?>