<?php
function connect() {
  $hostname = 'localhost';

  $dbname = '';
    
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$hostname;dbname=$dbname";
    
  try {
    return new PDO($dsn, $username, $password);
  } catch (Exception $e) {
    echo($e->getMessage());
  }
}
