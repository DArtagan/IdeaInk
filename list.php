<?php
  // Connect to database
  require_once "inc/database.php";
  
  $result = mysql_query("SELECT * FROM thoughts");

  echo "<ul>";
  while($row = mysql_fetch_array($result))
    {
      echo "<li><a href=\"http://worldwidewilly.net/projects/ideaink/index.php?ideaID=" . $row['ideaID'] . "\">";
      echo "#" . $row['ideaID'] . " - " . $row['Title'];
      echo "</a></li>";
    }
  echo "</ul>";
  
  echo "<br /><a href=\"http://worldwidewilly.net/projects/ideaink\">New Thought</a>";
  
mysql_close($con);
?> 
