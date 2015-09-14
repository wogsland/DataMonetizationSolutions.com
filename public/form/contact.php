<?php
echo 'before req<br>';
require_once '../../inc.php';
echo 'after req<br>';
print_r($_POST);

$vars = array('name', 'email', 'comments');
foreach ($vars as $var) {
    $$var = isset($_POST[$var]) ? $mysqli->real_escape_string($_POST[$var]) : '';
}

$query = "INSERT INTO contact_form_responses (name, email, comments)
          VALUES ('$name', '$email', '$comments')";
$mysqli->query($query);

redirect('/thank-you.html');
?>
