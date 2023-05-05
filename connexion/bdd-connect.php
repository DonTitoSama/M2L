<?php 
  $host_name = 'localhost';
  $database = 'diego';
  $user_name = 'diego';
  $password = 'iY7Vei7k';
  $dbh = null;

  try {
    $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
    $dbh->query("SET NAMES utf8");
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
  }
?>