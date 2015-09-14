<?php
echo 'before funcs<br>';
include_once 'functions.php';
echo 'before creds<br>';
include_once 'credentials.php';

echo 'before mysqli<br>';
$mysqli = new mysqli($host, $user, $pass, $database);
?>
