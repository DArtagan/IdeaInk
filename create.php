<?php
  ob_start();

  // Connect to server
  require_once "inc/database.php";

  // Insert the values
  if($dbh = open_db()) {
    try{
      if($submitAction == "Save Thought") {
        $url = "http://worldwidewilly.net/projects/ideaink/index.php";
        header("Location: $url");
      } else {
        require_once "inc/make.php";
        makeThought($dbh, $_POST[Title], $_POST[Alias], $_POST[Tag], $_POST[Content]);
        $result = $dbh->lastInsertId();
	$url = "http://worldwidewilly.net/projects/ideaink/index.php?ideaID=" . $result;
        header("Location: $url");
      }
    } catch (PDOException $e) {
      $error = "Idea was not added: " . $e->getMessage();
    }  
  }
  echo $error;

  ob_end_flush();
?>
