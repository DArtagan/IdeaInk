<html>
<head>
</head>
<body>

<?php
  // Connect to server
  $con = mysql_pconnect("db2906.perfora.net","dbo364182075", "JC!KJg3Uyqz*");
  if(!$con)
    {
      die('Could not connect: ' . mysql_error());
    }
    
  // Select Database
  $db_selected = mysql_select_db("db364182075", $con);
  if (!$db_selected) 
    {
      die('Cannot use db364182075 : ' . mysql_error());
    }
  
  // Insert the values
  $sql="INSERT INTO thoughts (Title, Tag, Content) VALUES ('$_POST[Title]', '$_POST[Tag]', '$_POST[Content]')";
  
  if (!mysql_query($sql,$con))
    {
      die('Error: ' . mysql_error());
    }
  echo "1 record added";
  mysql_close($con);

?>
</body>
</html>