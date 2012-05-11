<?php
  ob_start();

  // Connect to server
  require_once "inc/database.php";

  // Insert the values
  if($dbh = open_db()) {
    try{
      $stmt = $dbh->prepare("INSERT INTO thoughts (Title, Tag, Content) VALUES (:title, :tag, :content)");
      $stmt->execute(array(":title" => $_POST[Title], ":tag" => $_POST[Tag], ":content" => $_POST[Content]));
      $result = $dbh->lastInsertId();
	    $url = "http://worldwidewilly.net/projects/ideaink/index.php?ideaID=" . $result;
	    header("Location: $url");
    } catch (PDOException $e) {
     $error = "Idea was not added: " . $e->getMessage();
    }  
  }
  echo $error;

  ob_end_flush();
?>
