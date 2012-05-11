<?php
  // Connect to database
  require_once "inc/database.php";

  $dbh = open_db();
  
  if(!empty($_GET["ideaID"])) {
    $theID = $_GET["ideaID"]
    $q = "SELECT * FROM thoughts WHERE ideaID=" . $theID; 
    $result = $dbh->query($q);
    while($row = $result->fetch()) {
      echo "<form class=\"input\" action=\"save.php?ideaID=" . $theID . "\" method=\"post\"><ul>";
        echo "<li>Title: <input type=\"text\" name=\"Title\" value=\"" . $row['Title'] . "\"/></li>";
        echo "<li>Tags (seperate with commas): <input type=\"text\" name=\"Tag\" value=\"" . $row['Tag'] . "\"/></li>"; 
        echo "<li>Thoughts:<br /><textarea name=\"Content\" rows=\"15\" cols=\"70\">" . $row['Content']. "</textarea></li>";
        echo "<li><input type=\"submit\" value=\"Save Thought\"/></li></ul></form>";
    }
  } else {
    echo "<form class=\"input\" action=\"create.php\" method=\"post\"><ul>";
      echo "<li>Title: <input type=\"text\" name=\"Title\" /></li>";
      echo "<li>Tags (seperate with commas): <input type=\"text\" name=\"Tag\" /></li>"; 
      echo "<li>Thoughts:<br /><textarea name=\"Content\" rows=\"15\" cols=\"70\"></textarea></li>";
      echo "<li><input type=\"submit\" value=\"Save Thought\"/></li></ul></form>";
  }
?>
