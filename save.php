<?php
  ob_start();
  // Connect to database
  require_once "inc/database.php";
  
  // Insert the values
  if($dbh = open_db()) {
    try{
      $stmt = $dbh->prepare("UPDATE thoughts SET Title = '$_POST[Title]', Tag = '$_POST[Tag]', Content = '$_POST[Content]' WHERE ideaID =" . $_GET["ideaID"]");
      $stmt->execute(array(":title" => $_POST[Title], ":tag" => $_POST[Tag], ":content" => $_POST[Content]));
      $result = $dbh->lastInsertId();
	    $url = "http://worldwidewilly.net/projects/ideaink/index.php?ideaID=" . $_GET["ideaID"];
	header("Location: $url");
    } catch (PDOException $e) {
     $error = "Idea was not added: " . $e->getMessage();
    }
  }
  echo $error;
  ob_end_flush;
?>
