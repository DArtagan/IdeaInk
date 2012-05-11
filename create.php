<?php
  // Connect to server
  require "inc/database.php"

  // Insert the values
	$sql="INSERT INTO thoughts (Title, Tag, Content) VALUES ('$_POST[Title]', '$_POST[Tag]', '$_POST[Content]')";

	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());
	}

  $result = mysql_insert_id ($con);

	$url = "http://worldwidewilly.net/projects/ideaink/index.php?ideaID=" . $result;
	header("Location: $url");
  
	mysql_close($con);
?>
