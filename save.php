<?php
  // Connect to database
  require_once "inc/database.php";
  
  // Insert the values
  $sql="UPDATE thoughts SET Title = '$_POST[Title]', Tag = '$_POST[Tag]', Content = '$_POST[Content]' WHERE ideaID =" . $_GET["ideaID"];
  
  if (!mysql_query($sql,$con))
  {
    die('Error: ' . mysql_error());
  }
  
	$url = "http://worldwidewilly.net/projects/ideaink/index.php?ideaID=" . $_GET["ideaID"];
	header("Location: $url");
	
	mysql_close($con);
?>
