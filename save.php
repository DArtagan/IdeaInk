<?php
  ob_start();

  // Connect to database
  require_once "inc/database.php";
  
  // Insert the values
  if($dbh = open_db()) {
    try{
      if($submitAction == "Forget Thought") {
        $q = "UPDATE thoughts SET Deleted = :deleted WHERE ideaID = :ideaID";
        $stmt = $dbh->prepare($q);
        $stmt->execute(array(":deleted" => 1, ":ideaID" => $_GET["ideaID"]));
        $url = "http://worldwidewilly.net/projects/ideaink/index.php";
        header("Location: $url");
      } else {
        $q = "UPDATE thoughts SET Title = :title, Tag = :tag, Content = :content WHERE ideaID = :ideaID";
        $stmt = $dbh->prepare($q);
        $stmt->execute(array(":title" => $_POST[Title], ":tag" => $_POST[Tag], ":content" => $_POST[Content], ":ideaID" => $_GET["ideaID"]));
        $result = $dbh->lastInsertId();
	$url = "http://worldwidewilly.net/projects/ideaink/index.php?ideaID=" . $_GET["ideaID"];
        header("Location: $url");
      }
    } catch (PDOException $e) {
     $error = "Idea was not added: " . $e->getMessage();
    }
  }
  echo $error;

  ob_end_flush();
?>
