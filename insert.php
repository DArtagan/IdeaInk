<html>
<head>
</head>
<body>

<?php
  // Connect to database
  require_once "inc/database.php";
  
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
