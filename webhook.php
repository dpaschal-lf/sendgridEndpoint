<?php

require_once('credentials.php');

error_log("something wrong, ".print_r($conn, true));

$query = "INSERT INTO receivedEmail SET subject='{$_POST['subject']}', body='{$_POST['email']}', sender='{$_POST['from']}', recipient='{$_POST['to']}', sent=NOW()";

mysqli_query($conn, $query);

?>