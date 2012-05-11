<?php

function open_db() {
  $host = "db2906.perfora.net";
  $user = "dbo364182075";
  $pass = "JC!KJg3Uyqz*";
  $dbname = "db364182075";

  try {
    # MySQL with PDO_MYSQL
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
  }
  catch(PDOException $e) {
    echo $e->getMessage();
    return false;
  }
}
?>
