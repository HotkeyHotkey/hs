<?php
  require_once 'main.php';
  echo "string";
  $id = $_GET['id'];
  $value = $_GET['value'];
  $valueName = $_GET['valueName'];
  updateUsers($id, $value, $valueName);
 ?>
