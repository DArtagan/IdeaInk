<?php
  // Connect to database
  require_once "inc/database.php";
  $dbh = open_db();
  
  $result = $dbh->query('SELECT * FROM thoughts');

  echo "<ul>";
    while($row = $result->fetch())
    {
      if($row['Deleted'] == 0) {
        echo "<li><a href=\"http://worldwidewilly.net/projects/ideaink/index.php?ideaID=" . $row['ideaID'] . "\">";
        echo "#" . $row['ideaID'] . " - " . $row['Title'];
        echo "</a></li>";
      }
    }
  echo "</ul>";
  
  echo "<br /><a href=\"http://worldwidewilly.net/projects/ideaink\">New Thought</a>";
?> 
