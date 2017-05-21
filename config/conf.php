<?php
include('classes/survey.php');

ob_start();
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'error974');
define('DB_PASS', 'LcXb9RRsB7[1j3');
define('DB_TABLE', 'survey');

// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_TABLE', 'survey');

try {
  $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_TABLE, DB_USER, DB_PASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Exception
} catch (Exception $e) {
  echo '<p>'.$e->getMessage().'</p>';
  exit;
}

$survey = new Survey($db);
