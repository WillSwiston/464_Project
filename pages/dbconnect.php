<?php
session_start();

include("../database.inc");
  $db = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($db->connect_error) {
    echo 'Errno: '.$db->connect_errno;
    echo 'Error: '.$db->connect_error;
    exit();
  }
?>
