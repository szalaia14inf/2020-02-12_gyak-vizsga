<?php

$connection = getConnection();

function getConnection() {
	global $config;
  $connection = mysqli_connect($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
  if (mysqli_connect_errno($connection)) {
	  die (mysqli_connect_error());
   }
  
   return $connection;
  
  }

?>