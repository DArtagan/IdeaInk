<?php
  $con = mysql_pconnect("db2906.perfora.net","dbo364182075", "JC!KJg3Uyqz*");
  if(!$con)
    {
      die('Could not connect: ' . mysql_error());
    }

  $db_selected = mysql_select_db("db364182075", $con);
  if (!$db_selected) 
    {
      die('Cannot use db364182075 : ' . mysql_error());
    }
  
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