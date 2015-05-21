<?php
  $mysqli = new mysqli('127.0.0.1', 'root', '', 'reservation_app');
  if ($mysqli->connect_errno) {
    echo "Geen verbinding met de DB";
  }
?>
