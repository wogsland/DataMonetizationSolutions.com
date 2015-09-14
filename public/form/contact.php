<?php
require_once '../../inc.php';

$vars = array('name', 'email', 'comments');
foreach ($vars as $var) {
    $$var = isset($_POST[$var]) ? $mysqli->real_escape_string($_POST[$var]) : '';
}

$query = "INSERT INTO contact_form_responses (name, email, comments)
          VALUES ('$name', '$email', '$comments')";
$mysqli->query($query);

redirect('/thank-you.html');
?>
